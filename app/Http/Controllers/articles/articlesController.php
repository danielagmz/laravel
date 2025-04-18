<?php

namespace App\Http\Controllers\articles;

use App\Models\Article;
use Illuminate\Http\Request;

class articlesController 
{
    /**
     * Display a listing of the resource.
     */
    public static function all($limit = 4, $order = 'asc', $search = null)
    {
        $articles = Article::with('author')
            ->orderBy('title', $order)
            ->where('title', 'like', '%' . $search . '%')
            ->paginate($limit);
        return $articles;
    }

    public static function allByAuthor($id, $limit = 4, $order = 'asc', $search = null)
    {
        $articles = Article::with('author')
            ->where('author_id', $id)
            ->orderBy('title', $order)
            ->where('title', 'like', '%' . $search . '%')
            ->paginate($limit);
        return $articles;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
