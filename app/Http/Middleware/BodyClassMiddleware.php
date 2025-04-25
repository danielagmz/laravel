<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BodyClassMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $bodyClass = match (true) {
            $request->is('/') => 'anonimo',
            $request->is('register') => 'anonimo register',
            $request->is('login') => 'anonimo',
            $request->is('forgot') => 'anonimo',
            $request->is('password/*') => 'anonimo',
            $request->is('reading/*') => Auth::check() ? '' : 'anonimo',
            $request->is('delete') => 'delete',
            $request->is('home') => 'read',
            $request->is('all') => 'read',
            default => '',

        };

        $anonimo = $request->is('/') || $request->is('register') || $request->is('login') || $request->is('forgot') || $request->is('password/*');

        view()->share('bodyClass', $bodyClass,); 
        view()->share('anonimo', $anonimo); 

        return $next($request);
    }
}
