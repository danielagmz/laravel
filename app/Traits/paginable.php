<?php

namespace App\Traits;

use Illuminate\Pagination\Paginator;

trait paginable
{
    public function resolvePagination($request)
    {
        $limit  = $request->get('limit', 4);
        $page   = $request->get('page', 1);
        $order  = $request->get('order', 'desc');
        $search = $request->get('filter', null);

        Paginator::currentPageResolver(fn() => $page);

        return compact('limit', 'page', 'order', 'search');
    }

    public function handleOverflow($request, $paginator)
    {
        if ($request->get('page', 1) > $paginator->lastPage()) {
            $params = $request->query();
            $params['page'] = 1;
            return redirect()->to(url()->current() . '?' . http_build_query($params));
        }

        return null;
    }
}
