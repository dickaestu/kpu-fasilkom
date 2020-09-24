@extends('layouts.main')

@section('title', 'Kandidat')

@section('content')
     <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-250 pb-120 default-overlay-2"
        style="background-image: url('{{ url('frontend/images/banner.jpg') }}');  ">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Kandidat</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="active">Kandidat </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="blog-area pt-80 pb-80 gray-bg-4 container-padding-res">
        <div class="container">
            <div class="pro-col-40">
                <div class="col-lg-12 text-center">
                    <h1>Dewan Perwakilan Mahasiswa</h1>
                </div>
                <br><br>
                <div class="row grid" data-show="9" data-load="3">

                    @foreach ($items as $item)
                        <div class="col-lg-4 col-md-6 item-hidden grid-item">
                        <div class="blog-wrap-2 blog-shadow mb-40" >
                            <div class="blog-img hover-3">
                                <a href="{{ route('dukungan', $item->id) }}">
                                    <img src="{{ Storage::url($item->foto) }}" alt="" height="400"
                                        style="object-fit:cover">
                                </a>
                                <div class="readmore-icon">
                                    <a href="{{ route('dukungan', $item->id) }}">
                                        <i class="ti-comment-alt"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-content-2 pt-3" style="height: 300px; overflow: auto;">
                                <h4 class="mb-0">{{ $item->nama }}</h4>
                                <div class="blog-meta-3 mb-5">
                                    <ul>
                                        <li>{{ $item->nim }}</li>
                                        <li>{{ $item->jurusan }}</li>
                                    </ul>
                                </div>
                                <p class="">Visi: <span>{!! $item->visi !!}</span></p>
                                 <p class="">Misi: <span>{!! $item->misi !!}</span></p>
                            </div>

                            <div class="single-shortcode-btn brown-button large-button mb-30">
                                <!-- <button style="height: 60px;" class="btn btn-block btn-hover">Standart
                                    Style</button> -->
                                <a style="height: 60px;" class="btn-hover btn-block" href="{{ route('dukungan', $item->id) }}">Berikan Dukungan</a>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>


@endsection