<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>{{ config('app.name', 'Registrasi') }}</title>

    <!-- Icons font CSS-->
    <link rel="icon" type="image/png" href="{{url('assets/images/logoumb.png')}}">
    <link href="{{asset('registrasi/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('registrasi/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('registrasi/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('registrasi/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('registrasi/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    

@yield('content')
    <!-- Jquery JS-->
       <script src="{{asset('registrasi/vendor/jquery/jquery.min.js')}}"></script>
       <!-- Vendor JS-->
       <script src="{{asset('registrasi/vendor/select2/select2.min.js')}}"></script>
       <script src="{{asset('registrasi/vendor/datepicker/moment.min.js')}}"></script>
       <script src="{{asset('registrasi/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('registrasi/js/global.js')}}"></script>

</body>

</html>
<!-- end document-->
