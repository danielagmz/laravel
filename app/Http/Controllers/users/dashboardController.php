<?php

namespace App\Http\Controllers\users;

use App\Http\Requests\UpdateimagesRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rules\Unique;


class dashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function updateInfo(Request $request)
    {
        $id = Auth::user()?->id;
        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                (new Unique('users', 'username'))->ignore($id),
            ],
            'email' => [
                'required',
                'string',
                (new Unique('users', 'email'))->ignore($id),
            ],
            'bio' => 'nullable|max:255|string',
        ]);
        if($id){
            $user = userController::update(
                $id,
                $validated['username'],
                $validated['email'],
                $validated['bio']
            );
            if($user){
                Auth::login($user);
                return redirect()->route('dashboard')->with('success', 'Información actualizada correctamente');
            }
        }
        
        return redirect()->route('dashboard')->with('error', 'Error al actualizar la información');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $id = Auth::user()?->id;
        if($id){
            $user = userController::updatePassword(
                $id,
                $request->new_password
            );
            if($user){
                Auth::login($user);
                return response('<div class="form-info form-info--success profile-info">Avatar modificado</div>', 200)
                ->header('Content-Type', 'text/html');
            }
        }
    }

    public function updateAvatar(UpdateimagesRequest $request)
    {
        $id = Auth::user()?->id;
        if($id){
            $path = $request->file('imagen')->store('avatars', 'public');
            $old_path = Auth::user()->avatar;
            if($old_path){
                Storage::disk('public')->delete($old_path);
            }
            $user = userController::updateAvatar(
                $id,
                $path
            );
            if($user){
                Auth::login($user);
                return response('<div class="form-info form-info--success profile-info">Avatar modificado</div>', 200)
                ->header('Content-Type', 'text/html');
            }
        }
    }

    public function updateBanner(UpdateimagesRequest $request)
    {
        $id = Auth::user()?->id;
        if($id){
            $path = $request->file('imagen')->store('banners', 'public');
            $old_path = Auth::user()->banner;
            if($old_path){
                Storage::disk('public')->delete($old_path);
            }
            $user = userController::updateBanner(
                $id,
                $path
            );
            if($user){
                Auth::login($user);
                return response('<div class="form-info form-info--success profile-info">Banner modificado</div>', 200)
                ->header('Content-Type', 'text/html');
            }
        }
    }

    public function destroy() {
        $validated = request()->validate([
            'password' => 'required |string',
        ]);
        $user = Auth::user();

        if (Hash::check($validated['password'], $user->password)) {
            $user = userController::destroy($user->id);
            Auth::logout();
            return response('<div class="form-info form-info--success profile-info">Cuenta eliminada</div>', 200)
            ->header('Content-Type', 'text/html');
        }
    }
}
