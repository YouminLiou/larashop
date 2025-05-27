<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;


// 定義根目錄路由，顯示 home.blade.php
Route::get('/', function () {
    return view('home'); // 將 resources/views/home.blade.php 傳給瀏覽器
});

// 產品列表頁面 Route
Route::get('/products', function () {
    $products = Product::all();              // 從資料庫撈出所有商品
    return view('products', compact('products'));
});

// 商品詳情頁
Route::get('/products/{id}', [ProductController::class, 'show'])
    // 命名 Route 方便在 Blade 用 route('products.show', $id)
    ->name('products.show');

// 聯絡頁面 Route
Route::get('/contact', function () {
    return view('contact');  // 回傳 resources/views/contact.blade.php
});
