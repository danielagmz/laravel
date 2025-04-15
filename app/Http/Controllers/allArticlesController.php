<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allArticlesController extends Controller
{
    public function index()
    {
        return view('allArticles');
    }
}
