<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/index', function () {
    return view('index');
})->middleware('auth')->name('index');

Route::get('login/google', [UserController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [UserController::class, 'handleGoogleCallback']);

Route::view('register', 'register')->name('register');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');

Route::view('login', 'login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
