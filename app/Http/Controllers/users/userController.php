<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public static function userByEmail($email) {
        $user = User::where('email', $email)->first();
        return $user;
    }

    public static function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return $user;
    }

    public static function update($id, $username, $email, $bio=null) {
        $user = User::find($id);
        $user->username = $username;
        $user->email = $email;
        $user->bio = $bio;
        $user->save();
        return $user;
    }

    public static function updateAvatar($id, $avatar) {
        $user = User::find($id);
        $user->avatar = $avatar;
        $user->save();
        return $user;
    }

    public static function updateBanner($id, $banner) {
        $user = User::find($id);
        $user->banner = $banner;
        $user->save();
        return $user;
    }


    public static function updatePassword($id, $password) {
        $user = User::find($id);
        $user->password = Hash::make($password);
        $user->save();
        return $user;
    }

    public static function create($username, $email, $password) {
        $user = new User;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();
        return $user;
    }

}
