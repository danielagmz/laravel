<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\users\userController;
use App\Traits\paginable;
use Illuminate\Pagination\Paginator;

class adminController
{
    use paginable;
    public function index(Request $request)
    {
        $pagination = $this->resolvePagination($request);
        $users = userController::all(
            $pagination['limit'],
            $pagination['order'],
            $pagination['search']
        );

        if ($redirectResponse = $this->handleOverflow($request, $users)) {
            return $redirectResponse;
        }

        return view('admin.admin', compact('users'));
    }

    public function destroyUser($id)
    {
        $user = userController::destroy($id);
        return response('<div class="form-info form-info--success profile-info">Cuenta eliminada</div>', 200)
            ->header('Content-Type', 'text/html');
    }
}
