<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class,'store'])->name('user.store');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('user/{product}', [UserController::class,'edit'])->name('user.edit');
Route::put('user/{product}', [UserController::class,'update'])->name('user.update');

Route::delete('user/{product}', [UserController::class,'destroy'])->name('user.destroy');