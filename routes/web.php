<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('categoria.index');
});




Route::resource('/categoria',CategoriaController::class);
// ruta productos
Route::resource('/producto',ProductoController::class);