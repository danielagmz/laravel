<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class socialiteController
{
    // Redirigir a Google
    public function redirectToGoogle()
    {
        session(['oauth_origin' => url()->previous()]);
        return Socialite::driver('google')->redirect();
    }

    // Manejar la respuesta de Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                $socialProvider = $user?->socialProvider;
                if ($socialProvider === 'github') {
                    $origin = session('oauth_origin', '/login');
                    return redirect($origin)->withErrors(['email' => "T\'has logat amb github"]);
                } elseif ($socialProvider === null) {
                    $origin = session('oauth_origin', '/login');
                    return redirect($origin)->withErrors(['email' => "T\'has logat amb contrasenya"]);
                }else {
                    Auth::login($user);
                    return redirect('/home');
                }
            } else {
                $username = $googleUser->getName();
                if (User::where('username', $username)->exists()) {
                    $username = $username . '_' . uniqid(); // Generar un username único
                }

                // Crear un nuevo usuario
                $user = User::create([
                    'email' => $googleUser->getEmail(),
                    'username' => $username,
                    'socialProvider' => 'google'
                ]);
            }

            Auth::login($user);

            return redirect('/home');
        } catch (\Exception $e) {
            $origin = session('oauth_origin', '/login');
            return redirect($origin)->withErrors(['email' => 'Ya existe una cuenta con este correo electrónico.']);
        }
    }

    // Redirigir a GitHub
    public function redirectToGitHub()
    {
        session(['oauth_origin' => url()->previous()]);
        return Socialite::driver('github')->redirect();
    }

    // Manejar la respuesta de GitHub
    public function handleGitHubCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();

            // Verificar si ya existe un usuario con el mismo email
            $user = User::where('email', $githubUser->getEmail())->first();

            if ($user) {
                $socialProvider = $user?->socialProvider;
                if ($socialProvider === 'google') {
                    $origin = session('oauth_origin', '/login');
                    return redirect($origin)->withErrors(['email' => "T'has logat amb google"]);
                } elseif ($socialProvider === null) {
                    $origin = session('oauth_origin', '/login');
                    return redirect($origin)->withErrors(['email' => "T'has logat amb contrasenya"]);
                }else {
                    Auth::login($user);
                    return redirect('/home');
                }
            } else {
                // Verificar si el username ya está en uso
                $username = $githubUser->getName();
                if (User::where('username', $username)->exists()) {
                    $username = $username . '_' . uniqid(); // Generar un username único
                }

                // Crear un nuevo usuario
                $user = User::create([
                    'email' => $githubUser->getEmail(),
                    'username' => $username,
                    'socialProvider' => 'github',
                ]);
            }

            Auth::login($user);

            return redirect('/home');
        } catch (\Exception $e) {
            $origin = session('oauth_origin', '/login');
            return redirect($origin)->withErrors(['email' => 'Ya existe una cuenta con este correo electrónico.']);
        }
    }
}
