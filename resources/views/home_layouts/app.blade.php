<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="fast food, burger, pizza">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/media/home/favi.svg')}}">
    <!--====== Title ======-->
    <title>Foodix - Fast Foods & Restaurants HTML Template</title>
    {{-- <link href="/dist/main.css" rel="stylesheet"> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flatepikr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('assets/css/home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home_media.css') }}">
    @stack('home_styles')
    @include('home_layouts.header')
</head>

<body>
    @yield('content')

    @stack('home_scripts')
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.min.js  ')}}"></script>
    <script src="{{asset('assets/js/flatpickr.js')}}"></script>
    <script src="{{asset('assets/js/front.js')}}"></script>
</body>

</html>