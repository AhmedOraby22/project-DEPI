<?php

namespace App\Mail;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ForgotPsswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
 
        return redirect('/reset-password');
    
    }
    public function passwordReset()
{
    $message = 'Your code is 0000 to reset password';
    return view('web.auth.reset-password', ['message' => $message]);
}

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);
       
        if($request->code == '0000')
        {
            $user = User::where('email',$request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return view('web.auth.login');
        }
        return view('web.auth.reset-password');
    
    }
}
