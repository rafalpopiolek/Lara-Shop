<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware('auth');
