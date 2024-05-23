<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Menu - Cafe</title>
    <link rel="icon" href="{{ asset('assets/img/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('assets/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/coloring.css ') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" id="colors" />
</head>

<body class="dark-scheme">
    <div id="wrapper">
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
        @include('web-layout.topbar')

        @yield('content')

        <a href="#" id="back-to-top"></a>
        @include('web-layout.footer')
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src=" {{ asset('assets/js/jquery.min.js') }}"></script>
    <script src=" {{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/js/plugins.min.js') }}"></script>
    <script src=" {{ asset('assets/js/designesia.js') }}"></script>
</body>

</html>
