{{-- resources/views/contact.blade.php --}}
@extends('layouts.app') {{-- 繼承主版 --}}
@section('title','Contact') {{-- 標題：Contact --}}

@section('content') {{-- 以下是 Contact 頁內容 --}}
  <h1>Contact Us</h1> {{-- 主標題 --}}
  <p>如果有任何問題，歡迎填寫下面表單與我們聯絡：</p> {{-- 說明文字 --}}

  <form class="mt-4"> {{-- mt-4：表單與上方隔開 --}}
    <div class="mb-3"> {{-- mb-3：欄位間距 --}}
      <label for="name" class="form-label">姓名</label>
      <input type="text" class="form-control" id="name" placeholder="輸入您的姓名">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="輸入您的 Email">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">留言內容</label>
      <textarea class="form-control" id="message" rows="4" placeholder="輸入您的留言"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">送出</button> {{-- 送出按鈕 --}}
  </form>
@endsection