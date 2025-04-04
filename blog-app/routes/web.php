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