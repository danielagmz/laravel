<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articles\allArticlesController;
use App\Http\Controllers\articles\articlesController;
use App\Http\Controllers\articles\createController;
use App\Http\Controllers\users\dashboardController;
use App\Http\Controllers\articles\deleteController;
use App\Http\Controllers\users\homeController;
use App\Http\Controllers\articles\updateController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\landingController;
use Illuminate\Support\Facades\Auth;

Route::post('/reading/{id}', [articlesController::class, 'show'])->name('reading');

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function () {
  Route::get('/', [landingController::class, 'index'])->name('landing');
  
  Route::get('/register', [registerController::class, 'index'])->name('register');
  Route::get('/login', [loginController::class, 'index'])->name('login');
  
  Route::post('/login', [loginController::class, 'login'])->name('login')->middleware('throttle:3,1');
  Route::post('/register', [registerController::class, 'register'])->name('register');
});

Route::get('/admin', [adminController::class, 'index'])->name('admin');

Route::middleware('auth')->group(function () {
  Route::get('/all', [allArticlesController::class, 'index'])->name('all');
  Route::get('/home', [homeController::class, 'index'])->name('home');
  Route::get('/create', [createController::class, 'index'])->name('create');
  Route::post('/create', [createController::class, 'store'])->name('create');
  Route::get('/delete', [deleteController::class, 'index'])->name('delete');
  Route::get('/update', [updateController::class, 'index'])->name('update');
  Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');


  Route::get('/deleting/{id}', [deleteController::class, 'deleting'])->name('deleting');
  Route::get('/updating/{id}', [updateController::class, 'updating'])->name('updating');
  Route::get('/reading/{id}', [articlesController::class, 'show'])->name('reading');

  Route::post('/deleting/{id}', [deleteController::class, 'delete'])->name('deleting');
  Route::post('/updating/{id}', [updateController::class, 'update'])->name('updating');
});
