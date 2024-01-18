<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo/logo.jpg') }}" type="image/x-icon">

    {{-- vendors css --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/vendor/bootstrap-icons/bootstrap-icons.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/bootstarp/app.css') }}">
    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/main.css') }}">


    @notifyCss

</head>

<body>


    <main class="">
        @yield('content')
    </main>




    {{-- vendors js --}}
    <script src="{{ asset('assets/admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{asset('assets/bootstarp/app.js')}}"></script>

    {{-- js files --}}
    <script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/admin/js/misc.js') }}"></script>
    <script src="{{ asset('assets/admin/js/settings.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

    <x-notify::notify />
    @notifyJs

</body>

</html>
