<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/categorias', CategoriaController::class); // GET /api/categorias URL
Route::apiResource('/productos', ProductoController::class); // GET /api/productos URL
Route::post('/registro', [AuthController::class, 'register']); // POST /api/registro URL
