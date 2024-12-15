<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

// Route giỏ hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // Xem giỏ hàng
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add'); // Thêm sản phẩm vào giỏ
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove'); // Xóa sản phẩm khỏi giỏ
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::resource('products', ProductController::class);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/', function () {
    return view('welcome');
});

// Thêm route cho resource 'products'
Route::resource('products', ProductController::class);