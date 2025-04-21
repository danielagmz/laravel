<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

class registerController
{
    public function index(){
        return view('auth.register');
    }
}
