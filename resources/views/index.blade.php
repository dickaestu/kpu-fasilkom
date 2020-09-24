@extends('layouts.main')

@section('title', 'K P U')

@section('content')
<!-- Slider Start -->
    <div class="slider-area height-100vh gray-bg-2 slider-padding-1 pt-100 pb-100 d-flex align-items-center">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                    <div class="slider-text-3">
                        <h1 class="text-animate-1">KPU FASILKOM 2020</h1>
                        <p class="text-animate-1">Tentukan Pilihanmu</p>
                    </div>
                </div>
                <div class="slider-img slider-img-position">
                    <img src="{{ url('frontend/images/logoumb.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- main-search start -->

    <!-- summary-info start -->
    <div class="blog-area pt-120 pb-90 blog-area-h3 container-padding-res">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="blog-wrap-2 mb-30 zoom-hover">
                        <div class="blog-img text-center">
                            <img class="mb-4" src="{{ url('frontend/images/dpm.png') }}" alt="">
                            <p>Fakultas Ilmu Komputer</p>
                            <h5 class="font-weight-bold">Dewan Perwakilan Mahasiswa</h5>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-4">
                    <div class="blog-wrap-2 mb-30 zoom-hover">
                        <div class="blog-img text-center">
                            <img class="mb-3" src="{{ url('frontend/images/BEM.jpeg') }}" alt="">
                            <p>Fakultas Ilmu Komputer</p>
                            <h5 class="font-weight-bold">Badan Eksekutif Mahasiswa</h5>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-4">
                    <div class="blog-wrap-2 mb-30 zoom-hover">
                        <div class="blog-img text-center">
                            <img class="mb-3" src="{{ url('frontend/images/himti.png') }}" alt="">
                            <p>Teknik Informatika</p>
                            <h5 class="font-weight-bold">Himpunan Mahasiswa</h5>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-4">
                    <div class="blog-wrap-2 mb-30 zoom-hover">
                        <div class="blog-img text-center">
                            <img src="{{ url('frontend/images/himsisfo.jpeg') }}" height="235" class="mb-3" alt="">
                            <p>Sistem Informasi</p>
                            <h5 class="font-weight-bold">Himpunan Mahasiswa</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-panduan" style="margin-bottom: 80px;">
        <div class="container-fluid">
            <div class="image-panduan text-center" alt="">
                <img src="{{ url('frontend/images/info4.jpg') }}" class="w-100">
            </div>
        </div>
    </section>

@endsection


 