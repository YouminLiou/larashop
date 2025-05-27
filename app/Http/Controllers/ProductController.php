<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * 顯示單一商品詳情
     *
     * @param  int  $id  商品 ID
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // 從資料庫抓取指定 ID 的商品，若沒找到會 404
        $product = Product::findOrFail($id);

        // 輸出到 resources/views/products/show.blade.php
        return view('products.show', compact('product'));
    }
}