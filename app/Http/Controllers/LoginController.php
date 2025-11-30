<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'mobile' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to log in
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect to home/dashboard with success message
            return redirect()->intended('/')->with('success', 'Logged in successfully!');
        }

        // Redirect back with errors (Blade will display them)
        return back()->withErrors([
            'mobile' => 'The provided credentials do not match our records.',
        ])->withInput(); // keeps the entered mobile in the form
    }

    public function logout(Request $request)
    {
        auth('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out successfully!');
    }
}
