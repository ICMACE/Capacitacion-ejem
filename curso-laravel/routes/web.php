<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//include "clase-de-rutas.php";
//include "clase-de-controller.php";
//include "clase-3.php";

//Route::view('mostrar', 'display',['message'=>'<p>este es un parrafo</p>'])->name('display');

//Route::get('directivas', [UserController::class, 'index'])->name('directivas');

//Route::view('incluir', 'incluir');

include "post.php";