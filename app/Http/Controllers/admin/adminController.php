<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\users\userController;
use Illuminate\Pagination\Paginator;

class adminController
{
    public function index(Request $request){
        $limit = $request->get('limit', 4);
        $page = $request->get('page', 1);
        $order = $request->get('order', 'desc');
        $search = $request->get('filter', null);

        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $users = userController::all($limit, $order, $search);
        if ($page > $users->lastPage()) {
            $params = $request->query();
            $params['page'] = 1;

            return redirect()->to(url()->current() . '?' . http_build_query($params));
        }
        
        return view('admin.admin', compact('users'));
    }
}
