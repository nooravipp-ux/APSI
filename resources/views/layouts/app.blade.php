<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('landingpage/images/logo.jpg')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="DPD APSI JABAR adalah Dewan Pimpinan Daerah Untuk Daerah Jawa barat DPD ini berkantor pusat di l. Terusan Buah Batu no.38 - 42, Batununggal, Bandung">
    <!-- Scripts -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('landingpage/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/style.css')}}">
    @yield('style')
</head>
<body>
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        @include('website.nav')
        @yield('content')
        @include('website.footer')
    </div>
    <script src="{{asset('landingpage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('landingpage/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('landingpage/js/jquery-ui.js')}}"></script>
    <script src="{{asset('landingpage/js/popper.min.js')}}"></script>
    <script src="{{asset('landingpage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landingpage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('landingpage/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('landingpage/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('landingpage/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('landingpage/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('landingpage/js/aos.js')}}"></script>
    <script src="{{asset('landingpage/js/mediaelement-and-player.min.js')}}"></script>
    <script src="{{asset('landingpage/js/main.js')}}"></script>
    @yield('script')
</body>
</html>
