<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'welcome');
})->name('home');


Route::controller(PostController::class)->group(function () {
    Route::get('posts', 'index')->name('posts.index');
    Route::get('posts/create', 'create')->name('posts.create');
    Route::post('posts', 'store')->name('posts.store');
    Route::get('posts/{id}', 'show')->name('posts.show');
});

Route::get('datos',[UserController::class,'data'])->name('datos');
Route::get('guardar',[UserController::class,'store'])->name('store');
Route::get('actualizar/{id}',[UserController::class,'update'])->name('actualizar');
Route::get('borrar/{id}',[UserController::class,'destroy'])->name('borrar');

Route::get('usuarios', function () {
    return view(view: 'form');
})->name('inicio');
Route::put('form/guardar',[UserController::class,'save'])->name('save');