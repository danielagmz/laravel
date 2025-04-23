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
    public static function create($title, $content,$author_id,$shared = false)
    {
        $article = Article::create([
            'title' => $title,
            'content' => $content,
            'shared' => $shared,
            'author_id' => $author_id
        ]);
        return $article;
    }

    /**
     * Display the specified resource.
     */
    public static function show($id)
    {
        $article = Article::find($id);
        return $article;
    }

    /**
     * Update the specified resource in storage.
     */
    public static function update($id, $title, $content, $shared=false)
    {
        $article = Article::find($id);
        $article->title = $title;
        $article->content = $content;
        $article->shared = $shared;
        $article->save();
        return $article;
    }

    /**
     * Remove the specified resource from storage.
     */
    public static function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return $article;
    }
}
