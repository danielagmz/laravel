<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

class dashboardController
{
    public function index()
    {
        return view('dashboard');
    }
}
