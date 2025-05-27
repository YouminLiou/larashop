{{-- resources/views/products.blade.php --}}
@extends('layouts.app')                        {{-- 繼承主版 --}}
@section('title','Products')                   {{-- 標題 --}}
@section('content')                            {{-- 內容 --}}
  <h1>Our Products</h1>                       {{-- 主標題 --}}
  <div class="row g-4 mt-3">                  {{-- Grid --}}
    @foreach($products as $product)            {{-- 動態迴圈 --}}
      <div class="col-sm-6 col-md-4">
        <div class="card h-100">
          <img src="{{ $product->image_url }}"
               class="card-img-top"
               alt="{{ $product->name }}">     {{-- 商品圖片 --}}
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $product->name }}</h5> {{-- 名稱 --}}
            <p class="card-text flex-grow-1">
              {{ $product->description }}      {{-- 描述 --}}
            </p>
            <p class="fw-bold">
              NT$ {{ number_format($product->price,2) }}  {{-- 價格 --}}
            </p>
            <a href="#" class="btn btn-primary mt-auto">加入購物車</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection