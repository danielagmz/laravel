<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\users\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\RateLimiter;

class loginController
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response' => session('show_captcha') ?  'required|captcha' : ''
        ]);

        $key = 'login-attempts:' . $request->ip();

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            RateLimiter::clear($key);
            session()->forget('show_captcha');
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }
        RateLimiter::hit($key, 60);

        if (RateLimiter::tooManyAttempts($key, 2)) {
            session(['show_captcha' => true]);
        }

        throw ValidationException::withMessages([
            'credentials' => ["l'usuari o la contrasenya son incorrectes"],
        ]);
    }

    public function logout(Request $request)
    {

        $currentUser = Auth::user();

        if ($currentUser && userController::removeRememberToken($currentUser->id)) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }

        return back()->with('error', 'Error al tancar sessió');
    }
}
