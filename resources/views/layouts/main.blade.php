<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
   @include('includes.style')
   @stack('addon-style')

</head>

<body class="wrapper">
    <div class="preloader"></div>
    @include('includes.navbar')
    @yield('content')

    @include('includes.footer')



    @include('includes.script')
    @stack('addon-script')
    <script>
    $(window).load(function() {
      
    $('.preloader').fadeOut('slow');
    });
    </script>
   
</body>


</html>