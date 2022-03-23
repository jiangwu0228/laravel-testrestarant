<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name','Restaurant')}}</title>

    <link rel="stylesheet"
        href="{{URL::asset('//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900')}}">
    <link rel="stylesheet" href="{{URL::asset('//fonts.googleapis.com/css?family=Monoton&display=swap')}}">
    <link rel="stylesheet" href="{{URL::asset('//fonts.googleapis.com/css?family=Miss+Fajardose&display=swap')}}">

    <link rel="stylesheet" href="{{URL::asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{URL::asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{URL::asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css') }}">
</head>

<body class="antialiased">
    @include('common/nav')
    <div>
        @yield('content')
    </div>
    @include('common/footer')
</body>
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/aos.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.animateNumber.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.timepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/scrollax.min.js') }}"></script>
<script type="text/javascript"
    src="{{ URL::asset('//maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/google-map.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

</html>
