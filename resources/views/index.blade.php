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
            }, 4000); // visible for 4s
        }

        $(document).ready(function() {
            $.getJSON('{{ route('notifications.json') }}', function(data) {
                const names = data.names;
                const actions = data.actions;
                const items = data.items;
                const locations = data.locations;

                let delay = 3000; // first delay

                function scheduleNotification() {
                    const name = getRandom(names);
                    const action = getRandom(actions);
                    const item = getRandom(items);
                    const location = locations.length ? ` from ${getRandom(locations)}` : '';

                    const message = ` <i style="color:#ff1da8; font-famiy:poppins;" class="fa-solid fa-circle-info"></i>
                            <span style="color: #000;">${name} ${action} ${item}${location}</span>
                        `;
                    showNotification(message);

                    // Schedule next after 5–10 seconds randomly
                    delay = Math.floor(Math.random() * 5000) + 5000;
                    setTimeout(scheduleNotification, delay);
                }

                // Start first after 3 seconds
                setTimeout(scheduleNotification, 3000);
            });
        });
    </script>
@endpush
