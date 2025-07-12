<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerificationEmail;
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
            'email'          => 'required|email',
            'password'       => 'required|min:6|confirmed',
            'agreed_terms'   => 'required|in:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        // Create user
        $verificationCode = rand(100000, 999999);
        $user = User::create([
            'name'           => $request->name,
            'email'          => $request->email,
            'password'       => Hash::make($request->password),
            'agreed_terms'   => true,
            'verification_code' => $verificationCode
        ]);
        Auth::login($user);
        Mail::to($user->email)->send(new VerificationEmail($user, "#", $verificationCode));
        Log::info("Verification email sent to {$user->email} with code {$verificationCode}");


        return response()->json([
            'success' => true,
            'message' => 'Account created successfully!',
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $user = Auth::user();

        if ($user && $user->verification_code === $request->otp) {
            $user->email_verified_at = now();
            $user->save();

            return response()->json(['success' => true, 'redirect' => route('home')]);
        }

        return response()->json(['success' => false, 'message' => 'Invalid OTP']);
    }

    public function attemptLogin(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // This will be true if checkbox is checked

        if (Auth::attempt($credentials, $remember)) {
            // Regenerate session to prevent session fixation
            $request->session()->regenerate();

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
}
