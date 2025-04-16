<?php

namespace App\Http\Controllers\articles;

use Illuminate\Http\Request;

class updateController
{
    public function index()
    {
        $articles = articlesController::all();
        return view('update', compact('articles'));
    }
}
