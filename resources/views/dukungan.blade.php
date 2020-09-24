@extends('layouts.main')
@section('title', 'Dukungan')

@section('content')
<!-- breadcrumb area -->
<div class="breadcrumb-area bg-img pt-250 pb-120 default-overlay-2"
style="background-image: url('{{ url('frontend/images/banner.jpg') }}'); ">
<div class="container">
  <div class="breadcrumb-content text-center">
    <h2>Dukungan</h2>
    <ul>
      <li>
        <a href="{{ route('home') }}">Beranda</a>
      </li>
      <li class="active">Dukungan </li>
    </ul>
  </div>
</div>
</div>


<div class="blog-area pt-80 pb-80 gray-bg-4 container-padding-res">
  <div class="container">
    <div class="pro-col-40">
      <div class="col-lg-12 text-center">
        <h1>
          @if ($item->jenis_kandidat == 'dpm')
          Dewan Perwakilan Mahasiswa
          @elseif($item->jenis_kandidat == 'bem')
          Badan Eksekutif Mahasiswa
          @elseif($item->jenis_kandidat == 'himsisfo')
          Himpunan Mahasiswa Sistem Informasi
          @else 
          Himpunan Mahasiswa Teknik Informatika
          @endif
          
        </h1>
      </div>
      @if (session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>    
      @endif
      @error('isi_komentar') <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>  
      @enderror
      <br><br>
      <div class="row " >
        
        <div class="col-12 col-lg-4">
          <div class="col-12 item-hidden grid-item">
            <div class="blog-wrap-2 blog-shadow mb-40">
              <div class="blog-img">
                <img src="{{ Storage::url($item->foto) }}" alt="" height="400"
                style="object-fit: cover;">
              </div>
              <div class="blog-content-2 pt-3" style="height: 300px; overflow: auto;">
                <h4 class="mb-0">{{ $item->nama }}</h4>
                  <div class="blog-meta-3 mb-5">
                    <ul>
                      <li>{{ $item->nim }}</li>
                      <li>{{ $item->jurusan }}</li>
                    </ul>
                  </div>
                  <p >Visi: <span >{!! $item->visi !!}</span></p>
                  <p >Misi: <span>{!! $item->misi !!}</span></p>
                </div>
                
                
              </div>
            </div>
            
          </div>
          
          <div class="col-12 col-lg-8">
            <div class="container">
              <div class="row">
                <div class="card shadow-sm" style="height: 500px; width:800px;  overflow: auto; overflow-x: hidden;">
                  <div class="card-body">
                    @forelse ($komentar as $komen)
                    <div class="dukungan mb-40">
                      <div
                      class="nim-pendukung text-muted mb-1"
                      style="font-size: 14px;"
                      >
                      {{ $komen->user->nim }} - {{ $komen->user->name }}
                    </div>
                    
                    <div class="komentar mt-0 border mb-1 p-3 rounded">
                      {{$komen->isi_komentar}}
                    </div>
                    
                    <div
                    class="nim-pendukung text-muted mb-0"
                    style="font-size: 14px;"
                    >
                    <small class="text-secondary">{{ $komen->created_at->translatedFormat('l, d-m-Y H:i') }}</small>
                  </div>
                  
                </div>
                @empty
                <h3 class="text-center" style="margin-top:25%;">Belum Ada Komentar...</h3>
                @endforelse
                
              </div>
            </div>
          </div>
          @if (Auth::user()->status_verifikasi == true)
          <div class="row mt-4 ">
            <div class="col-12 col-md-7 p-0">
              <form action="{{ route('dukungan-create',[$item->id, Auth::user()->id] ) }}" method="post">
                @csrf
                <div class="form-group">
                  <textarea
                  class="form-control rounded"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  cols="30"
                  name="isi_komentar"
                  placeholder="Masukkan Komentar"
                  required
                  >{{ old('isi_komentar') }}</textarea>
                </div>
                
              </div>
              
              
              
              <div class="col-12 col-md-5 p-0">
                <div class="form-group col mb-2 ">
                  <div class="captcha">
                    <span>{!! captcha_img() !!}</span>
                    <button type="button" style="background: transparent; cursor:pointer;" class="btn text-dark btn-sm" id="refresh"><i class="ti-reload"></i></button>
                  </div>
                </div>
                <div class="form-group col-6 mt-2">
                  <input required id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                </div>
                
              </div>
            </div>
            
            <div class="row">
              <button type="submit" style="cursor: pointer; height: 50px;"
              class="btn btn-success btn-block d-block"
              >
              Kirim
            </button> 
          </div>
        </form>
        @else 
        
        <div class="row mt-4">
          <button type="button" style="height: 50px;"
          class="btn btn-danger btn-block d-block" disabled
          >
          Akun Anda Belum Terverifikasi
        </button> 
      </div>
      @endif
      
      
      @if ($errors->any())
      <div class="alert alert-danger mt-2">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      
    </div>
  </div>
  
  
  
  
</div>
</div>

</div>
</div>


@endsection

@push('addon-script')
<script type="text/javascript">
  $('#refresh').click(function(){
    $.ajax({
      type:'GET',
      url:'/refreshcaptcha',
      success:function(data){
        $(".captcha span").html(data.captcha);
      }
    });
  });
</script>
@endpush