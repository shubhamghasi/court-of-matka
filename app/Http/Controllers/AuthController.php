<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerificationEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.index');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|unique:users,email',
            'phone'          => 'required|digits:10|unique:users,phone',
            'password'       => 'required|min:6|confirmed',
            'agreed_terms'   => 'required|in:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $verificationCode = rand(100000, 999999);

        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'password'          => Hash::make($request->password),
            'agreed_terms'      => true,
            'verification_code' => $verificationCode
        ]);

        Auth::login($user);

        Mail::to($user->email)->send(new VerificationEmail($user, "#", $verificationCode));
        Log::info("Verification email sent to {$user->email} with code {$verificationCode}");

        return response()->json([
            'success' => true,
            'message' => 'Account created successfully!',
            'redirect' => route('validate-otp')
        ]);
    }

    public function verifyOtp(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'otp' => 'required|digits:6',
            ]);

            $user = Auth::user();

            if ($user && $user->verification_code == $request->otp) {
                $user->email_verified_at = now();
                $user->save();

                return response()->json(['success' => true]);
            }
            return response()->json(['success' => false, 'message' => 'Invalid OTP']);
        }
        return view('partials.auth.validate-otp');
    }

    public function attemptLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Check if email is verified
            if (is_null($user->email_verified_at)) {
                // Generate new OTP
                $verificationCode = rand(100000, 999999);

                // Update verification_code in DB
                $user->verification_code = $verificationCode;
                $user->save();

                // Resend OTP
                Mail::to($user->email)->send(new VerificationEmail($user, "#", $verificationCode));
                Log::info("Verification email resent to {$user->email} with code {$verificationCode}");

                // Redirect to OTP verification
                return response()->json([
                    'success' => true,
                    'message' => 'Verification required. OTP sent to your email.',
                    'redirect' => route('validate-otp')
                ]);
            }

            // Email is already verified
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'redirect' => route('home')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials',
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout(); // Log out the user
        request()->session()->invalidate(); // Invalidate the session
        request()->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/')->with('status', 'You have been logged out.');
    }

    public function resendOtp(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        $verificationCode = rand(100000, 999999);
        $user->verification_code = $verificationCode;
        $user->save();

        Mail::to($user->email)->send(new VerificationEmail($user, "#", $verificationCode));
        Log::info("Resent OTP to {$user->email}: {$verificationCode}");

        return response()->json(['success' => true, 'message' => 'OTP resent']);
    }
}
