<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from demo.afracode.com/eduline/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 10:11:31 GMT -->
<head>
    <title>Eduline</title>
    <link rel="shortcut icon" href="{{asset('frontend/assets/favicon.ico')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600,700,900&amp;display=swap">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}" />
    @yield('css')

</head>

<body>
    @yield('inline_css')

    {{-- @include('layouts.partials.header') --}}

    @yield('content')


{{-- --------------JS---------------- --}}
    @yield('js_before')
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main-scripts.js')}}"></script>
    @yield('js_after')


</body>

</html>
