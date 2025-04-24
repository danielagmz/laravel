<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\users\userController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class forgotPasswordController
{
    public function index()
    {
        return view('auth.forgotPassword');
    }

    public function forgotPassword(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $user = userController::userByEmail($validated['email']);

        if ($user) {
            $status = Password::sendResetLink(
                ['email' => $user->email]
            );
    
            return $status === Password::RESET_LINK_SENT
                ? back()->with('success', __($status))        // éxito
                : back()->withErrors(['email' => __($status)]); // error
        }

        return back()->withErrors(['email' => 'El correu no existeix']);

    }
}
