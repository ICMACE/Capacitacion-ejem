<?php

use Illuminate\Http\Request;
/*
Route::get('/', function () {
    return view('welcome',['name'=>'Miguel']);
});
*/
Route::get('hola',function(){
    return "Hi!";
})->name('hola');
/*
Route::get('/suma',function(){
    $x=2;
    $y=34;
    $resultado=$x+$y;
    return $resultado;
})->name('suma');

Route::get('/suma/{x}/{y}',function($x,$y){
    return 'La suma es: '.$x+$y;
})->where([
    'x'=>'[0-9]+',
    'y'=>'[0-9]+'
])->name('suma-dos-numeros');
*/
Route::get('/nombre/{name?}',function($name='Sin dato'){
    return 'Tu nombre es: '.$name;
})->where('name','[A-Za-z]+');

Route::redirect('/sumando','/suma',301);//301 permanente o 302 temporal

Route::get('/verificar',function(Request $request){
    //inspeccionar si la ruta actual existe o no existe
    if($request->route()->named() =='HOLA'){
        return 'ok';
    }else{
        return "NO ok";
    }
})->name('verificar');

Route::prefix('admin')->group(function () {
    Route::get('/primero', function () {
        return 'primero';
    });
    Route::get('/segundo', function () {
        return 'segundo';
    });
});