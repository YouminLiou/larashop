{{-- resources/views/home.blade.php --}}
@extends('layouts.app') {{-- 繼承 layouts/app.blade.php 主板版 --}}
@section('title','Home') {{-- 瀏覽器標題：Home --}}

@section('content') {{-- 以下是 Home 頁的內容 --}}
  <h1>Welcome to Larashop Day 2</h1> {{-- 主要標題 --}}
  <button class="btn btn-primary">Bootstrap 測試按鈕</button> {{-- 測試按鈕 --}}

  <div class="row g-4 mt-5"> {{-- Bootstrap Grid：g-4=間距, mt-5=上方外距 --}}
    @foreach(['A','B','C'] as $item) {{-- 三筆範例商品 --}}
      <div class="col-sm-6 col-md-4"> {{-- sm≥576px:2欄, md≥768px:3欄 --}}
        <div class="card h-100"> {{-- 卡片元件，高度填滿父容器 --}}
          <img src="https://via.placeholder.com/300x200"
               class="card-img-top"
               alt="Product {{ $item }}"> {{-- 卡片圖片 --}}
          <div class="card-body d-flex flex-column"> {{-- 卡片內容垂直排列 --}}
            <h5 class="card-title">商品 {{ $item }}</h5> {{-- 商品標題 --}}
            <p class="card-text flex-grow-1">
              這是商品 {{ $item }} 的簡短描述。
            </p> {{-- flex-grow-1:描述撐開按鈕 --}}
            <a href="#" class="btn btn-primary mt-auto">加入購物車</a> {{-- mt-auto:按鈕貼底 --}}
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection