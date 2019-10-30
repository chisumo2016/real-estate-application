<!DOCTYPE html>
<html lang="en">
<head>
    <title>Venue Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{ asset('front-end/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{asset ('front-end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset ('front-end/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset ('front-end/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('front-end/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('front-end/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset ('front-end/css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset ('front-end/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset ('front-end/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset ('front-end/css/fl-bigmug-line.css') }}">


    <link rel="stylesheet" href="{{ asset('front-end/css/aos.css') }}">

    <link rel="stylesheet" href="{{asset('front-end/css/style.css')}}">

</head>
<body>

<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+44 777 3923 3922</span></a>
                        <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">info@admin.com</span></a>
                    </p>
                </div>
                <div class="col-6 col-md-6 text-right">
                    <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
                    <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
                    <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
                </div>
            </div>
        </div>

    </div>
    @include('partials.nav')
</div>
{{--Carousel--}}
@yield('content')


@include('partials.footer')


<script src="{{ asset('front-end/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('front-end/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('front-end/js/jquery-ui.js') }}"></script>
<script src="{{ asset('front-end/js/popper.min.js') }}"></script>
<script src="{{ asset('front-end/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front-end/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front-end/js/mediaelement-and-player.min.js') }}"></script>
<script src="{{ asset('front-end/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('front-end/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front-end/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front-end/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('front-end/js/aos.js') }}"></script>

<script src="{{ asset('front-end/js/main.js') }}"></script>

@yield('javascript')

</body>
</html>
