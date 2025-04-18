<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Models\User;

class userController
{
    public static function all($limit = 4, $order = 'desc', $search = null) {
        $users = User::where('username', 'like', '%' . $search . '%')
        ->orderBy('username', $order)
        ->paginate($limit);
        return $users;
    }

}
