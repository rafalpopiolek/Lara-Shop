<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

//Route::resource('products', ProductController::class);

Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

Route::get('/users/list', [UserController::class, 'index'])->middleware('auth');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
