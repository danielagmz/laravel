<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\articles\articlesController;
use App\Traits\paginable;
use Illuminate\Support\Facades\Auth;

class homeController
{
    use paginable;
    public function index(Request $request){
        $pagination = $this->resolvePagination($request);

        $articles = articlesController::allByAuthor(
            Auth::user()->id,
            $pagination['limit'], 
            $pagination['order'], 
            $pagination['search']
        );

        if ($redirectResponse = $this->handleOverflow($request, $articles)) {
            return $redirectResponse;
        }

        return view('home', compact('articles'));
    }
}
