<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about' , function () {
    return view('about');
})->name('about');

Route::get('/contact' , function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'submitContact'])->name('submit-contact');

Route::get('/index', [TaskController::class, 'fetch'])->middleware('auth')->name('index');

Route::get('login/google', [UserController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [UserController::class, 'handleGoogleCallback']);

Route::view('register', 'register')->name('register');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');

Route::view('login', 'login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::post('store', [TaskController::class, 'store'])->name('store');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

