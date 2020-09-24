@extends('layouts/main')

@section('title', 'Perhitungan Langsung')

@section('content')
    <!-- breadcrumb area -->
    <div class="breadcrumb-area bg-img pt-250 pb-120 default-overlay-2"
        style="background-image: url('{{ url('frontend/images/banner.jpg') }}');">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Perhitungan Langsung</h2>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="active">Perhitungan Langsung </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- main-search start -->

    <!-- summary-info start -->

    <div class="funfact-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                         <span><img src="{{ url('frontend/images/dpm.png') }}" height="120"  class="mb-0"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">{{ $dpm }}</h2>
                            <span>DPM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                            <span><img src="{{ url('frontend/images/BEM.jpeg') }}" height="120"  class="mb-0"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">{{ $bem }}</h2>
                            <span>BEM</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                            <span><img src="{{ url('frontend/images/himti.png') }}" height="120"  class="mb-0"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">{{ $himti }}</h2>
                            <span>HIMTI</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                              <span><img src="{{ url('frontend/images/himsisfo.jpeg') }}" height="120"  class="mb-0"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">{{ $himsisfo }}</h2>
                            <span>HIMSISFO</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6">
                  
                    @if (\Carbon\Carbon::now()->format('y-m-d H:i:s') >= \Carbon\Carbon::create('2020-09-30 07:00:00')->format('y-m-d H:i:s'))
                        <div class="single-count text-center mb-30">
                        <div class="count-icon">
                            <span class="ti-time"></span>
                        </div>
                        <div class="count-title">
                            <h4>Sisa Waktu Pemilihan</h4>
                            <h2 id="timer"></h2>
                        </div>
                    </div>
                    @else 
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                            <span class="ti-time"></span>
                        </div>
                        <div class="count-title">
                            <h4>Tanggal Pemilihan</h4>
                            <h2>30 September 2020</h2>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@push('addon-script')
   <script>
// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date("Sep 30, 2020 15:00:00").getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "SUDAH TUTUP";
  }
}, 1000);
</script>
@endpush