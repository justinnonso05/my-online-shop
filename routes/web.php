<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/journey', [HomeController::class, 'journey'])->name('journey');
Route::get('/add-products', [ProductController::class, 'add_products'])->name('products.add');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/shop', [ProductController::class, 'shop'])->name('products.shop');
Route::get('/products/order/{id}', [ProductController::class, 'order'])->name('products.order');
