<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Models\User;

class userController
{
    public function getUsernamebyId($id){
        $user = User::find($id);
        return $user->username;
    }
}
