@extends('layouts.main')

@section('title', 'Pemungutan Suara')

@section('content')
    <!-- breadcrumb area -->
<div class="breadcrumb-area bg-img pt-250 pb-120 default-overlay-2"
style="background-image: url('{{ url('frontend/images/banner.jpg') }}');">
<div class="container">
  <div class="breadcrumb-content text-center">
    <h2>Pemungutan Suara</h2>
    <ul>
      <li>
        <a href="{{ route('home') }}">Beranda</a>
      </li>
      <li class="active">Pemungutan Suara </li>
    </ul>
  </div>
</div>
</div>
<!-- summary-info start -->

<div class="blog-area pt-80 pb-80 gray-bg-4 container-padding-res">
  <div class="container">
    <div class="pro-col-40">
      <div class="col-lg-12 text-center">
        <h1>Pemungutan Suara Sudah Di Tutup</h1>
      </div>
   
        </div>
        
      </div>
    </div>
@endsection