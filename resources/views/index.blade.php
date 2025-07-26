@extends('app.layouts')
@section('title', 'Home')
@section('content')
    <main class="container mx-auto px-4 py-8">
        {{-- @include('partials.home.intro') --}}

        @include('partials.home.play_matka')

        @include('partials.home.betting_trend')

        {{-- @include('partials.home.doubt_check') --}}

        @include('partials.home.secure_bet')
        <div id="floating-notification"
            style="
                display: none;
                position: fixed;
                bottom: 20px;
                left: 20px;
                background-color: #fff;
                border: 2px solid #ff1da8;
                padding: 12px 20px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                z-index: 9999;
                font-weight: 600;
            ">
        </div>


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
    <script>
        function getRandom(array) {
            return array[Math.floor(Math.random() * array.length)];
        }

        function showNotification(msg) {
            const box = $('#floating-notification');
            box.hide().html(msg).fadeIn();

            setTimeout(() => {
                box.fadeOut();
            }, 5000); // show for 5 seconds
        }

        function isWithinTime(start, end) {
            const now = new Date();
            const nowSeconds = now.getHours() * 3600 + now.getMinutes() * 60 + now.getSeconds();

            const [startH, startM, startS = 0] = start.split(':').map(Number);
            const [endH, endM, endS = 0] = end.split(':').map(Number);

            const startSeconds = startH * 3600 + startM * 60 + startS;
            const endSeconds = endH * 3600 + endM * 60 + endS;

            // Handles normal and overnight time windows
            if (startSeconds <= endSeconds) {
                return nowSeconds >= startSeconds && nowSeconds <= endSeconds;
            } else {
                return nowSeconds >= startSeconds || nowSeconds <= endSeconds;
            }
        }

        $(document).ready(function() {
            $.getJSON('{{ route('notifications.json') }}', function(data) {
                const notifications = data.notifications;

                if (!notifications.length) return;

                function scheduleNotification() {
                    // At the moment of displaying, filter again by time
                    const validNow = notifications.filter(n =>
                        isWithinTime(n.start_time, n.end_time)
                    );

                    if (!validNow.length) {
                        // If nothing valid right now, check again in 30s
                        setTimeout(scheduleNotification, 30000);
                        return;
                    }

                    const notif = getRandom(validNow);
                    const message = `
                    <i style="color:#ffd43b;" class="fa-solid fa-bell"></i>
                    <span style="color: #000;">${notif.message}</span>
                `;

                    showNotification(message);

                    const delay = Math.floor(Math.random() * 5000) + 25000; // 25–30 sec
                    setTimeout(scheduleNotification, delay);
                }

                // Start after initial delay
                setTimeout(scheduleNotification, 10000);
            });
        });
    </script>
@endpush
