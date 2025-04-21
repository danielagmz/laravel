<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\articles\articlesController;
use App\Traits\paginable;
use Illuminate\Pagination\Paginator;

class homeController
{
    use paginable;
    public function index(Request $request){
        $pagination = $this->resolvePagination($request);

        $articles = articlesController::all(
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
