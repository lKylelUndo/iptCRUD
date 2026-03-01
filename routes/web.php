<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-all-products', [ProductController::class, 'index']);
Route::get('/create-product-form', [ProductController::class, 'create']);
Route::get('/create-category-form', [CategoryController::class, 'create']);
