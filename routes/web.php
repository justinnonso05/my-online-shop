<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/journey', [HomeController::class, 'journey'])->name('journey');
Route::get('/products', [ProductController::class, 'add_products'])->name('add-products');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');