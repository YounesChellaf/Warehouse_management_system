<!DOCTYPE html>
<html lang="en">
<head>
    <title>EASY BUSINESS SUITE :: AZIMUT BUSINESS SOLUTIONS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/main.css') }}">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div class="limiter" id="app">
   @yield('content')
</div>
<script src="/js/app.js"></script>
<script src="{{ asset('frontend/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend/login/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('frontend/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/login/vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('frontend/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src="{{ asset('frontend/login/js/main.js') }}"></script>
</body>
</html>
