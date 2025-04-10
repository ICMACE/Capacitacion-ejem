<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('ToDoList')->group(function () {
    Route::get('home', [TaskController::class,'index'])->name('task.index');

    Route::get('crear', [TaskController::class,'create'])->name('task.create');
    Route::post('guardar', [TaskController::class,'store'])->name('task.store');

    Route::get('editar/{product}', [TaskController::class,'edit'])->name('task.edit');
    Route::put('actualizar/{product}', [TaskController::class,'update'])->name('task.update');
    Route::post('completar/{product}', [TaskController::class,'completed'])->name('task.completed');
    Route::post('quitar_completado/{product}', [TaskController::class,'incompleted'])->name('task.incompleted');
    

    Route::delete('eliminar/{product}', [TaskController::class,'destroy'])->name('task.destroy');
    Route::get('ver/{product}', [TaskController::class,'show'])->name('task.show');

});
Route::prefix('Usuarios')->group(function () {
    Route::get('home', [UserController::class,'index'])->name('user.index');

    Route::get('crear', [UserController::class,'create'])->name('user.create');
    Route::post('guardar', [UserController::class,'store'])->name('user.store');

    Route::get('editar/{product}', [UserController::class,'edit'])->name('user.edit');
    Route::put('actualizar/{product}', [UserController::class,'update'])->name('user.update');

    Route::delete('eliminar/{product}', [UserController::class,'destroy'])->name('user.destroy');
});