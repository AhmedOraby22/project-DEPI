<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PasswordResetToken;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
        // Generate a unique reset code
        $code = Str::random(4);
        // Save the reset token in the `password_reset_tokens` table
        PasswordResetToken::updateOrCreate(
            ['email' => $request->email], // Find by email to avoid duplicates
            ['code' => $code]             // Update or insert the code
        );
        // Redirect to reset password page with the code in the session
        return redirect()->route('password.reset')->with(['message' => "Your code is {$code} to reset password"]);
    }

    public function passwordReset()
    {
        // Show the reset password form with the message from the session
        return view('web.auth.reset-password', ['message' => session('message')]);
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);
        // Verify the code in the `password_reset_tokens` table
        $resetToken = PasswordResetToken::where('email', $request->email)
            ->where('code', $request->code)
            ->first();
        if($resetToken)
        {
            // Update the user's password
            $user = Patient::where('email', $request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return view('web.auth.login')->with('success', 'Password reset successfully');
        }
        // Reload the reset password view with an error message if the code is invalid
        return redirect()->back()->withErrors(['code' => 'The code is invalid.']);
    }
}

