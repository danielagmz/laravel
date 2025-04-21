<?php

namespace App\Http\Controllers;

use App\Http\Controllers\articles\articlesController;
use App\Traits\paginable;
use Illuminate\Http\Request;

class landingController
{
    use paginable;

    public function index(Request $request)
    {
        $pagination = $this->resolvePagination($request);

        $articles = articlesController::all(
            $pagination['limit'], 
            $pagination['order'], 
            $pagination['search']
        );

        if ($redirectResponse = $this->handleOverflow($request, $articles)) {
            return $redirectResponse;
        }

        return view('landing', compact('articles'));
    }
}