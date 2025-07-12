<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="preload" href="/assets/img/loader.gif" as="image">
</head>

<body class="min-h-screen">
    <div id="toast-container" class="fixed top-5 right-5 z-50 flex flex-col gap-3"></div>
    @include('partials.header_footer.header')
    @yield('content')
    @include('partials.header_footer.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/dist/blockui.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
</body>

</html>
