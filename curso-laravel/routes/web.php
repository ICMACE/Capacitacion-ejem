<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
include "clase-de-rutas.php";
include "clase-de-controller.php";