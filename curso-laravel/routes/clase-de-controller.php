<?php

use App\Http\Controllers\CursoController;

//Route::get('/{param}',[CursoController::class,'getName'])->name('home');
Route::get('/suma',[CursoController::class,'index'])->name('plus');