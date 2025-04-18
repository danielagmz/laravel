<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\articles\articlesController;
use Illuminate\Pagination\Paginator;

class homeController
{
    public function index(Request $request){
        $limit = $request->get('limit', 4);
        $page = $request->get('page', 1);
        $order = $request->get('order', 'desc');

        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $articles = articlesController::all($limit, $order);

        if ($page > $articles->lastPage()) {
            $params = $request->query();
            $params['page'] = 1;

            return redirect()->to(url()->current() . '?' . http_build_query($params));
        }

        return view('home', compact('articles'));
    }
}
