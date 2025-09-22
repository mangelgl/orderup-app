<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::apiResource('/categorias', CategoriaController::class); // /api/categorias URL
    Route::apiResource('/productos', ProductoController::class); // /api/productos URL
});
