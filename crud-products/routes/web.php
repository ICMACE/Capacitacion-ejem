<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [ProductController::class,'index'])->name('product.index');
Route::get('inicio', [ProductController::class,'index'])->name('product.index');
Route::get('crear', [ProductController::class,'create'])->name('product.create');
Route::post('guardar', [ProductController::class,'store'])->name('product.store');

Route::get('editar/{product}', [ProductController::class,'edit'])->name('product.edit');
Route::put('actualizar/{product}', [ProductController::class,'update'])->name('product.update');

Route::delete('eliminar/{product}', [ProductController::class,'destroy'])->name('product.destroy');
Route::get('ver/{product}', [ProductController::class,'show'])->name('product.show');