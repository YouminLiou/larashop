{{-- 繼承主版板 layouts/app.blade.php --}}
@extends('layouts.app')

{{-- 設定 HTML 標題 --}}
@section('title', 'Product Details')

{{-- 頁面主要內容 --}}
@section('content')
  <div class="card mx-auto" style="max-width:600px">
    {{-- 商品圖片 --}}
    <img src="{{ $product->image_url }}"
         class="card-img-top"
         alt="{{ $product->name }}">

    <div class="card-body">
      {{-- 商品名稱 --}}
      <h2 class="card-title">{{ $product->name }}</h2>

      {{-- 商品描述 --}}
      <p class="card-text">{{ $product->description }}</p>

      {{-- 商品價格 (格式化顯示兩位小數) --}}
      <p class="fw-bold">NT$ {{ number_format($product->price, 2) }}</p>

      {{-- 加入購物車按鈕（待實作功能） --}}
      <a href="#"
         class="btn btn-primary">
        加入購物車
      </a>
    </div>
  </div>
@endsection