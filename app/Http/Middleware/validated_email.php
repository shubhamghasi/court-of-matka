<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class validated_email
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && is_null(Auth::user()->email_verified_at)) {
            return redirect()->route('validate-otp')->withErrors(['email' => 'Please verify your email to continue.']);
        }

        return $next($request);
    }
}
