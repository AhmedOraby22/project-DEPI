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
       /* $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);*/
        return view('web.auth.reset-password');
    }

  /*  public function passwordReset(string $token)
    {
        return view('web.auth.reset-password', ['token' => $token]);
    }*/

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);
        if($request->code == 0000)
        {
            $user = User::where('email',$request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return view('web.auth.login');
        }
        return view('web.auth.reset-password');
       /* $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function(User $user, string $password)
            {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);
                // ->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('web.auth.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);*/
    }
}
