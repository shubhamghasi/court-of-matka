<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Signup</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="preload" href="/assets/img/loader.gif" as="image">
</head>

<body class="min-h-screen flex items-center justify-center p-4">
    <div id="toast-container" class="fixed top-5 right-5 z-50 flex flex-col gap-3"></div>

    <div class="w-full max-w-md" x-data="{ isLogin: true }">
        <!-- Card Container -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Tabs -->
            <div class="flex border-b border-gray-200">
                <button @click="isLogin = true"
                    :class="isLogin ? 'border-b-2 border-purple-600 text-purple-600' : 'text-gray-500'"
                    class="flex-1 py-4 px-6 text-center font-medium focus:outline-none transition-all duration-200">
                    Login
                </button>
                <button @click="isLogin = false"
                    :class="!isLogin ? 'border-b-2 border-purple-600 text-purple-600' : 'text-gray-500'"
                    class="flex-1 py-4 px-6 text-center font-medium focus:outline-none transition-all duration-200">
                    Sign Up
                </button>
            </div>

            <!-- Form Container -->
            <div class="p-6">
                @include('partials.auth.login')
                @include('partials.auth.signup')
            </div>
        </div>

        <!-- Footer -->
        <p class="text-center mt-6 text-sm text-gray-600">
            © {{ date('Y') }} {{ $options['app_name'] ?? 'Matka Minds' }}. All rights reserved.
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/dist/blockui.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/auth/index.js') }}"></script>
</body>

</html>
