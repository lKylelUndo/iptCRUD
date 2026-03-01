<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/show-all-products', [ProductController::class, 'index'])->name("product.index");
Route::get('/product/create-product-form', [ProductController::class, 'create'])->name("product.create");
Route::get('/category/create-category-form', [CategoryController::class, 'create'])->name("category.create");
