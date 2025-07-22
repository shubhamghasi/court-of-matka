@extends('app.layouts')
@section('title', 'Home')
@section('content')
    <main class="container mx-auto px-4 py-8">
        {{-- @include('partials.home.intro') --}}

        @include('partials.home.play_matka')

        @include('partials.home.betting_trend')

        {{-- @include('partials.home.doubt_check') --}}

        @include('partials.home.secure_bet')

    </main>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script>
        // start of tawk to 
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/687e7443fcac9d191f1572b3/1j0mvcag0';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
@endpush
