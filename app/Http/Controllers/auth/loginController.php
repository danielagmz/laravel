<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class loginController
{
    public function index(){
        return view('auth.login');
    }
}
