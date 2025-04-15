<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allArticlesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\createController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\updateController;

Route::get('/', function () {
    return view('landing');
});

Route::view('/admin', 'admin.admin')->name('admin');
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');

Route::get('/all', [allArticlesController::class, 'index'])->name('all');
Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/create', [createController::class, 'index'])->name('create');
Route::get('/delete', [deleteController::class, 'index'])->name('delete');
Route::get('/update', [updateController::class, 'index'])->name('update');
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/deleting/{id}', [deleteController::class, 'index'])->name('deleting');
Route::get('/updating/{id}', [updateController::class, 'index'])->name('updating');
Route::get('/reading/{id}', [ArticlesController::class, 'index'])->name('reading');

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');