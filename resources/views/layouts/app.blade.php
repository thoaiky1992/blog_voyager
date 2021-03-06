<!doctype html>
<html lang="en">
    <!-- Mirrored from colorlib.com/preview/theme/lifeleck/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 13:54:49 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        @stack('meta')
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>KỲ SMILE BLOG</title>
        <link rel="icon" href="img/favicon.png">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/liner_icon.css')}}">
        <link rel="stylesheet" href="{{asset('css/search.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
    </head>
    <body>
        @include('partials.menu')
        
        @yield('content')

        @include('partials.footer')
        {{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
        <script src="{{asset('js/jquery-3.5.1.js')}}" ></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}" ></script>
        
        {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="2311f11fc50d0ccb8924d0f9-text/javascript"></script> --}}
        
       
        {{-- <script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="2311f11fc50d0ccb8924d0f9-|49" defer=""></script> --}}
    </body>
    <!-- Mirrored from colorlib.com/preview/theme/lifeleck/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 13:55:04 GMT -->
</html>