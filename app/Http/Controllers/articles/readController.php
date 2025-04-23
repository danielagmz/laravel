<?php

namespace App\Http\Controllers\articles;

use Illuminate\Http\Request;
use App\Http\Controllers\articles\articlesController;

class readController
{
    public function index(Request $request,$id){
        $article = articlesController::show($id);

        return view('reading',compact('article'));
    }
}
