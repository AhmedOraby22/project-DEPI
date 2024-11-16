<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Ensure this is included
use App\Models\Admin;
class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.adminlogin'); // Path to your login view
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

      

        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = auth()->guard('admin')->user();
            return redirect()->intended('/dashboard/home');
        }

        // If login fails, redirect back with an error
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
