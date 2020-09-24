@extends('layouts.registrasi')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">{{ __('Register') }}</h2>
                </div>
                <div class="card-body">
                    <form style="margin-bottom: 20px" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-row">
                            <div for="name" class="name">{{ __('Name') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="name" class="input--style-5 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div for="nim" class="name">{{ __('NIM') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="nim" class="input--style-5 @error('nim') is-invalid @enderror" type="text" name="nim" value="{{ old('nim') }}" required>
                                    @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div for="email" class="name">{{ __('E-Mail Address') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="email" class="input--style-5 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                                <div for="bukti_ktm" class="name">{{ __('Upload Bukti KTM') }}</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input id="bukti_ktm" class=" @error('bukti_ktm') is-invalid @enderror" type="file" name="bukti_ktm" required>
                                        <small>Max: 5mb, Format: jpg,jpeg,png</small> <br>
                                        @error('bukti_ktm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        <div class="form-row">
                            <div for="password" class="name">{{ __('Password') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="password" class="input--style-5 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div for="password-confirm" class="name">{{ __('Confirm Password') }}</div>
                            <div class="value">
                                <div class="input-group">
                                    <input id="password-confirm" class="input--style-5" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn--radius-2 btn--red" type="submit">{{ __('Register') }}</button>
                    </form>
                    <a href="{{ route('login') }}" style="text-decoration: none; color:black" >{{ __('Sudah memiliki akun?') }} </a>
                </div>
                
            </div>
        </div>
    </div>
    </div>
@endsection
