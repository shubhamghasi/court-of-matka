<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="/assets/admin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/admin/css/lineicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/admin/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="/assets/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="/assets/admin/css/main.css" />
</head>

<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->
    @if (Auth::user()?->role === 'admin')
        <!-- ======== sidebar-nav start =========== -->
        @include('admin.app.sidebar')
        <!-- ======== sidebar-nav end =========== -->

        <!-- ======== main-wrapper start =========== -->
        <main class="main-wrapper">
            <!-- ========== header start ========== -->
            @include('admin.app.header')
            <!-- ========== header end ========== -->
    @endif
    <!-- ========== section start ========== -->
    @yield('content')
    <!-- ========== section end ========== -->
    @if (Auth::user()?->role === 'admin')
        <!-- ========== footer start =========== -->
        @include('admin.app.footer')
        <!-- ========== footer end =========== -->
        </main>
        <!-- ======== main-wrapper end =========== -->
    @endif
    <!-- ========= All Javascript files linkup ======== -->
    <script src="/assets/admin/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/admin/js/Chart.min.js"></script>
    <script src="/assets/admin/js/dynamic-pie-chart.js"></script>
    <script src="/assets/admin/js/moment.min.js"></script>
    <script src="/assets/admin/js/fullcalendar.js"></script>
    <script src="/assets/admin/js/jvectormap.min.js"></script>
    <script src="/assets/admin/js/world-merc.js"></script>
    <script src="/assets/admin/js/polyfill.js"></script>
    <script src="/assets/admin/js/main.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/dist/blockui.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script> --}}
    {{-- @stack('scripts') --}}
</body>

</html>
