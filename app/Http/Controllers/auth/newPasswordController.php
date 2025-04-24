<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class newPasswordController
{
    public function index(Request $request,$token)
    {
        $email = $request->email;
        return view('auth.newPassword',compact('token','email'));
    }

    public function reset(Request $request)
    {
        $validated = $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            $validated,
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => bcrypt($request->password),
                    'remember_token' => null,
                ])->save();
            }
        );
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
