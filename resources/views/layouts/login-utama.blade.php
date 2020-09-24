<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{url('assets/images/logoumb.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>

<!--<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown10">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>  -->


@yield('content')


    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/jquery/jquery-3.2.1.min.js')}}" ></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/animsition/js/animsition.min.js')}}" ></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/bootstrap/js/popper.js')}}" ></script>
    <script src="{{ asset('login_assets/vendor/bootstrap/js/bootstrap.min.js')}}" ></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/select2/select2.min.js')}}" ></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/daterangepicker/moment.min.js')}}" ></script>
    <script src="{{ asset('login_assets/vendor/daterangepicker/daterangepicker.js')}}" ></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/countdowntime/countdowntime.js')}}" ></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/js/main.js')}}" ></script>

    
    
       
</body>

</html>
