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
        <h1>Himpunan Mahasiswa Sistem Informasi</h1>
      </div>
      @if (session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>    
      @endif
      @if (session('error'))
      <div class="alert alert-danger" role="alert">
        {{session('error')}}
      </div>    
      @endif
      <br><br>
      <div class="row grid" data-show="9" data-load="3">
        @foreach ($items as $item)
        <div class="col-lg-4 col-md-6 item-hidden grid-item">
          <div class="blog-wrap-2 blog-shadow mb-40">
            <div class="blog-img">
                <img src="{{ Storage::url($item->foto) }}" alt="" height="400"
                style="object-fit: cover;">
            </div>
            <div class="blog-content-2 pt- text-center">
              <h4 class="mb-0">{{ $item->nama }}</h4>
              <div class="blog-meta-3 ">
                <ul>
                  <li>{{ $item->nim }}</li>
                  <li>{{ $item->jurusan }}</li>
                </ul>
              </div>
            </div>
            
            <div class="single-shortcode-btn brown-button large-button mb-30">
              
              @if (App\Vote::where('user_id',Auth::user()->id)->where('jenis_kandidat','himsisfo')->first())
              <button style="height: 60px; " class="btn btn-block" disabled>Anda Sudah Pernah Vote</button>
                @else
                <form action="{{ route('vote-create-himsisfo', [$item->id, Auth::user()->id]) }}" method="post">
                  @csrf
                  <button type="submit" style="height: 60px; cursor: pointer;" class="btn btn-block btn-hover">Vote</button>
                </form>
                @endif
                </div>
                
              </div>
            </div>
            
            @endforeach
            
          </div>
        </div>
        
      </div>
    </div>
    @endsection