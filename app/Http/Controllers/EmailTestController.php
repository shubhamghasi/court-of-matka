<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailTestController extends Controller
{
    //
    public function showForm()
    {
        return view('test-email');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        try {
            Mail::to($request->email)->send(new TestEmail("This is a test email sent to {$request->email}"));

            return back()->with('success', 'Email sent successfully to ' . $request->email);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
