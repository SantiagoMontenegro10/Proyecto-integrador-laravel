<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('categoria.index');
});




Route::resource('/categoria',CategoriaController::class);