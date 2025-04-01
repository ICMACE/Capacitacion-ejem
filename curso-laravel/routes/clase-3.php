<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CursoController;
use App\Http\Middleware\Subscribed;

Route::resource('users', AdminUserController::class)->parameters([
    'users' => 'admin_users'
]);

Route::get('subscribed',function(){
    return "Bienvenido tu!";
})->middleware(Subscribed::class);

Route::view('ejemplo','example',['name'=>'Miguel'])->name('example');
ROute::get('ejemplo2',function(){
    return view('example',['name'=>'Tú']);
})->name('example2');

Route::get('/operaciones',[CursoController::class,'index'])->name('plus');