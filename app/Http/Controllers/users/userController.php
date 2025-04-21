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

    public static function show($id) {
        $user = User::find($id);
        return $user;
    }

    public static function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return $user;
    }

    public static function update($id, $username, $email, $password) {
        $user = User::find($id);
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        return $user;
    }

    public static function setAvatar($id, $avatar) {
        $user = User::find($id);
        $user->avatar = $avatar;
        $user->save();
        return $user;
    }

    public static function setBanner($id, $banner) {
        $user = User::find($id);
        $user->banner = $banner;
        $user->save();
        return $user;
    }

}
