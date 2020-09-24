@extends('layouts.registrasi')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
            
                <div class="card-heading">
                    <h2 class="title">{{ __('Settings') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password-update') }}">
                    @csrf
                                        
                        <div class="form-row{{ $errors->has('oldpassword') ? ' has-errors' : '' }}">
                            <div for="oldpassword" class="name">{{ __('Old Password') }}</div>
                            <div class="value">
                                <div class="input-group">
                               
                                    <input id="oldpassword" class="input--style-5 @error('oldpassword') is-invalid @enderror" type="password" name="oldpassword" required autocomplete="oldpassword">
                                    @if ($errors->has('oldpassword'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                @endif
                                 @if(session('error'))
                                 <style type="text/css">
                                .warna {
                                color: red;
                                }
                                </style>
                                    <span class="invalid-feedback text-danger" role="alert">
                                <strong class="warna">Maaf ! {{ session('error') }}</strong> 
                            </span>
                            @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div for="password" class="name">{{ __('New Password') }}</div>
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
                        
                        <button class="btn btn--radius-2 btn--red" type="submit">{{ __('Change Password') }}</button>
                       <div class="form-row" style="margin-top:20px">
                            <a class="btn btn--radius-2 btn--red" href="{{ route('home') }}"><i class="fa fa-home fa-2x"></i></a>
                       </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
