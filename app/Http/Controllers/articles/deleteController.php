<?php

namespace App\Http\Controllers\articles;

use Illuminate\Http\Request;

class deleteController
{
    public function index(){
        $articles = articlesController::all();
        return view('delete', compact('articles'));
    }
}
