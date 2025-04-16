<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class adminController
{
    public function index(){
        return view('admin.index');
    }
}
