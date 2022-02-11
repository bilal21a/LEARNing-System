<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon">
    <link rel="icon" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180">
    <!-- END Icons -->
    @yield('before_css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link href="{{ asset('assets/css/oneui.min.css') }} " rel="stylesheet">
    @yield('css')

</head>

<body>

    @yield('internal_css')

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        @include('admin.layouts.rightsidebar')

        @include('admin.layouts.leaftsidebar')

        @include('admin.layouts.header')



        <main id="main-container">
            @yield('content')
        </main>



    </div>


    <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/be_pages_dashboard.min.js') }}"></script>
    @yield('js')

</body>

</html>
