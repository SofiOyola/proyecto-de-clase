<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

Route::prefix('product')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create');
    Route::post('/store','store')->name('product.store');
    Route::get('/{product}','show')->name('product.show');
    Route::delete('/{product}', 'destroy')->name('product.destroy');
});

