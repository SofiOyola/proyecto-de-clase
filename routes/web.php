<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

Route::get('/', HomeController::class);

Route::prefix('product')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create');
    Route::post('/store','store')->name('product.store');
    Route::get('/{product}','show')->name('product.show');
    Route::delete('/{product}', 'destroy')->name('product.destroy');
});


//Route::get('/admin', [AdminController::class, 'index']);
Route::prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/productos', [ProductController::class, 'adminIndex'])->name('admin.productos');

    Route::get('/categorias', [CategoryController::class, 'index'])->name('admin.categorias');
    Route::get('/categorias/create', [CategoryController::class, 'create'])->name('admin.categorias.create');
    Route::post('/categorias', [CategoryController::class, 'store'])->name('admin.categorias.store');
    Route::get('/categorias/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categorias.edit');
    Route::put('/categorias/{category}', [CategoryController::class, 'update'])->name('admin.categorias.update');
    Route::delete('/categorias/{category}', [CategoryController::class, 'destroy'])->name('admin.categorias.destroy');
});

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');