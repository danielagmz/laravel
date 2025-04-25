<?php

namespace App\Http\Controllers\articles;

use Illuminate\Http\Request;
use App\Http\Controllers\articles\articlesController;
use Illuminate\Support\Facades\Auth;
use App\Traits\paginable;


class deleteController
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
        return view('delete', compact('articles'));
    }

    public function deleting(Request $request,$id){
        $article = articlesController::show($id);

        if($article->author_id != Auth::user()->id){
            return redirect()->route('delete');
        }

        return view('deleting', compact('article'));
    }

    public function delete(Request $request,$id){
        $article = articlesController::destroy($id);
        if($article){
            if($article->author_id != Auth::user()->id){
                return redirect()->route('delete');
            }
            return redirect()->route('home');
        }
        return back()->with('error', 'Article no trobat');
    }
}
