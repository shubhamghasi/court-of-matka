<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->isMethod('get')){
            return view('admin.login');
        }
        $credentials = $request->only('email', 'password');
        
        $user = User::where('email', $credentials['email'])->first();
        
        if (!$user || $user->role !== 'admin') {
            return back()->withErrors(['email' => 'Unauthorized access.']);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin'); // or route('admin.home')
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}
