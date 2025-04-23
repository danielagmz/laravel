<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\users\userController;

class registerController
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validated = $request->validate( [
            'username' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = userController::create(
            $validated['username'], 
            $validated['email'], 
            $validated['password']
        );

        Auth::login($user);

        // if (Auth::attempt($credentials, $request->filled('remember'))) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/home');
        // }

        return redirect('/home');

    }
}
