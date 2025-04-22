<?php

namespace App\Http\Controllers\articles;

use Illuminate\Http\Request;
use App\Http\Controllers\articles\articlesController;
use Illuminate\Support\Facades\Auth;

class createController
{
    public function index()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:2504',
        ]);

        if(Auth::user()->id){
           $article = articlesController::create(
            $request->title,
            $request->content,
            Auth::user()->id
        ); 
        }else{
            return back()->with('error', 'You must be logged in to create an article.');
        }
        

        if ($article) {
            return back()->with('success', 'Article created successfully.');
        }
    }
}
