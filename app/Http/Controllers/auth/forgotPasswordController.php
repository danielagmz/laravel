<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class forgotPasswordController
{
    public function index()
    {
        return view('auth.forgotPassword');
    }
}
