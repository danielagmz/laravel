<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

class homeController
{
    public function index(){
        return view('home');
    }
}
