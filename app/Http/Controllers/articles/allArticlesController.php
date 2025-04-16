<?php

namespace App\Http\Controllers\articles;

use Illuminate\Http\Request;
use App\Http\Controllers\articles\articlesController;

class allArticlesController
{
    public function index(){
        $articles = articlesController::all();
        return view('allArticles', compact('articles'));
    }
}
