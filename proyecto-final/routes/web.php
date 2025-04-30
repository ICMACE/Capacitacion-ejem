<?php

use App\Http\Controllers\BranchesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('modules.users.login');
});

Route::get('/first-user', [UsersController::class, 'firstUser']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return view('modules.content');
})->name('home');

Route::get('/branches', [BranchesController::class, 'index'])->name('branches.index');
Route::post('/branches', [BranchesController::class, 'store'])->name('branches.store');
Route::get('/branches/{branch}/edit', [BranchesController::class, 'edit'])->name('branches.edit');
Route::put('/branches', [BranchesController::class, 'update'])->name('branches.update');
Route::get('/branches/{id}/{branch}', [BranchesController::class, 'changeState'])->name('branches.changeState');
/*
Route::get('/branches/{branch}', [BranchesController::class, 'show'])->name('branches.show');

*/