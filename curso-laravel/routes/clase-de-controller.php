<?php

use App\Http\Controllers\CursoController;

Route::get('/{param}',[CursoController::class,'getName'])->name('home');
//Route::get('/suma',[CursoController::class,'index'])->name('plus');
Route::prefix('calculadora')->group(function () {
    Route::get('/suma/{param1}/{param2}', [CursoController::class,'suma'])->where(['param1' => '[0-9]+', 'param2' => '[0-9]+'])->name('sumar');
    Route::get('/resta/{param1}/{param2}', [CursoController::class,'resta'])->where(['param1' => '[0-9]+', 'param2' => '[0-9]+'])->name('resta');
    Route::get('/multiplicacion/{param1}/{param2}', [CursoController::class,'multiplicacion'])->where(['param1' => '[0-9]+', 'param2' => '[0-9]+'])->name('multiplicacion');
    Route::get('/division/{param1}/{param2}', [CursoController::class,'division'])->where(['param1' => '[1-9]+', 'param2' => '[1-9]+'])->name('division');

});