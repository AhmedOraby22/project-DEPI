<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('web.auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/'); // Redirect to a protected route or dashboard
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'email' => 'Wrong user name or password.',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return view('web.auth.login');
    }
}
