<?php

namespace App\Http\Controllers\articles;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\articles\articlesController;
use App\Traits\paginable;


class updateController
{
    use paginable;
    public function index(Request $request)
    {
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
        return view('update', compact('articles'));
    }

    public function updating(Request $request,$id)
    {
        $article = articlesController::show($id);
        return view('updating', compact('article'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:2504',
        ]);
        $article = articlesController::show($id); 
        if($article){
            $article = articlesController::update(
                $id,
                $validated['title'],
                $validated['content']
            );

            return back()->with('success', 'Article Modificat correctament');
        }
        
        return back()->with('error', 'Article no trobat');
    } 
}
