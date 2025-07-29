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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {!! $options['google_search_console_tag'] ?? "No Search Console Tag" !!}
    @stack('styles')
</head>

<body class="min-h-screen">
    <div id="top-marquee-bar" class="bg-yellow-300 py-2 px-4 text-sm font-medium text-yellow-900">
        <marquee id="marquee-text" behavior="scroll" direction="left" scrollamount="5">
        </marquee>
    </div>

    <!-- 🔷 Fixed Message Strip (Blue Background) -->
    <div class="bg-blue-500 text-white text-sm font-medium py-2 px-4 flex justify-between items-center">
        <span>
            🔔
            {{ $options['top_baner_text'] ?? 'Reminder: Your wallet balance must be sufficient before placing a vote.' }}

        </span>
    </div>
    <div id="toast-container" class="fixed top-5 right-5 z-50 flex flex-col gap-3"></div>
    @include('partials.header_footer.header')
    @yield('content')
    @include('partials.header_footer.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/dist/blockui.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    @stack('scripts')
</body>

</html>
