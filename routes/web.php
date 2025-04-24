<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articles\allArticlesController;
use App\Http\Controllers\articles\articlesController;
use App\Http\Controllers\auth\SocialiteController;
use App\Http\Controllers\auth\newPasswordController;
use App\Http\Controllers\articles\createController;
use App\Http\Controllers\users\dashboardController;
use App\Http\Controllers\articles\deleteController;
use App\Http\Controllers\users\homeController;
use App\Http\Controllers\articles\updateController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\articles\readController;
use App\Http\Controllers\auth\forgotPasswordController;

Route::post('/logout', [loginController::class, 'logout'])->name('logout');
Route::get('/reading/{id}', [readController::class, 'index'])->name('reading');

Route::get('/auth/google/redirect', [SocialiteController::class, 'redirectToGoogle'])->name('google_social_login');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/auth/github/redirect', [SocialiteController::class, 'redirectToGitHub'])->name('github_social_login');
Route::get('/auth/github/callback', [SocialiteController::class, 'handleGitHubCallback'])->name('github.callback');

Route::middleware('guest')->group(function () {
  Route::get('/', [landingController::class, 'index'])->name('landing');
  
  Route::get('/register', [registerController::class, 'index'])->name('register');
  Route::get('/login', [loginController::class, 'index'])->name('login');
  Route::get('/forgot', [forgotPasswordController::class, 'index'])->name('forgotPassword');
  
  Route::post('/login', [loginController::class, 'login'])->name('login')->middleware('throttle:3,1');
  Route::post('/register', [registerController::class, 'register'])->name('register');
  
  Route::post('/forgot', [forgotPasswordController::class, 'forgotPassword'])->name('forgotPassword');
  Route::get('password/reset/{token}', [newPasswordController::class, 'index'])->name('password.reset');
  Route::post('password/reset', [newPasswordController::class, 'reset'])->name('password.update');

});


Route::middleware('auth')->group(function () {
  Route::get('/all', [allArticlesController::class, 'index'])->name('all');
  Route::get('/home', [homeController::class, 'index'])->name('home');
  Route::get('/create', [createController::class, 'index'])->name('create');
  Route::post('/create', [createController::class, 'store'])->name('create');
  Route::get('/delete', [deleteController::class, 'index'])->name('delete');
  Route::get('/update', [updateController::class, 'index'])->name('update');
  Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
  
  Route::get('/admin', [adminController::class, 'index'])->name('admin')->middleware('adminOnly');
  Route::post('/delete/user/{id}', [adminController::class, 'destroyUser'])->name('destroyUser')->middleware('adminOnly');

  Route::get('/deleting/{id}', [deleteController::class, 'deleting'])->name('deleting');
  Route::get('/updating/{id}', [updateController::class, 'updating'])->name('updating');


  Route::post('/deleting/{id}', [deleteController::class, 'delete'])->name('deleting');
  Route::post('/updating/{id}', [updateController::class, 'update'])->name('updating');

  Route::post('/update/info', [dashboardController::class, 'updateInfo'])->name('updateInfo');

  Route::post('/update/password', [dashboardController::class, 'updatePassword'])->name('updatePassword');

  Route::post('/update/avatar', [dashboardController::class, 'updateAvatar'])->name('updateAvatar');

  Route::post('/update/banner', [dashboardController::class, 'updateBanner'])->name('updateBanner');

  Route::post('/delete/account', [dashboardController::class, 'destroy'])->name('destroy');


});
