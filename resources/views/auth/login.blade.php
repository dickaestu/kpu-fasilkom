@extends('layouts.login-utama')

@section('content')
<div class="limiter">
        @if(session('sukses'))
        <style type="text/css">
        .warna {
        color: green;
        }
        </style>
        <center><b class="warna"><marquee scrollamount="15">Selamat ! {{ session('sukses') }}</marquee></b></center>
       
        @endif
        
        <div style="text-align: center"> 
            @error('nim') <div class="" style="color: red; font-size:16px">Nim atau password salah</div>@enderror
             @error('password') <div class="" style="color: red; font-size:16px">Nim atau password salah</div>@enderror
        </div>
        
        
        <div class="container-login100">
            
            <div class="wrap-login100 p-b-160 p-t-50">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                    {{ __('Login') }}
                    </span>
                    @csrf
                    <div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
                        <input id="nim" class="input100 @error('nim') is-invalid @enderror" type="text" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>
                        <span for="nim" class="label-input100">{{ __('NIM') }}</span>
                     

                        @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                    

                    <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                        <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                        <span for="password" class="label-input100">{{ __('Password') }}</span>

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                        {{ __('Login') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                    <div class="text-center w-full p-t-23">
                        <a href="{{ route('password.request') }}" class="text-warning">
                        {{ __('Lupa password ?') }}
                        </a>
                        @endif
                        <br>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-warning">
                        {{ __('Register') }}
                        </a>
                        @endif
                        <br>
                        @if (Route::has('home'))
                        <a href="{{ route('home') }}" class="txt1">
                        {{ __('Beranda') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
