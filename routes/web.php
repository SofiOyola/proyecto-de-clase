<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/create', [ProductController::class, 'create']);

//Rutas dinámicas
//Sirve para evitar varias rutas
Route::get('/product/{producto}', [ProductController::class, 'show']);
