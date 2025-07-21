@extends('app.layouts')

@section('title', 'Validate OTP')

@section('content')
    <main class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div id="signup_form_container" class="bg-white shadow-xl rounded-xl w-full max-w-md p-8">
            <h2 id="createaccount" class="text-2xl font-semibold text-purple-700 text-center mb-6">
                Verify Your Email
            </h2>
            <form id="otp_verification_form" method="post" class="space-y-6">
                @csrf
                <div>
                    <label for="otp" class="block text-sm font-medium text-gray-700 mb-1">
                        Enter the 6-digit code sent to your email
                    </label>
                    <input type="text" name="otp" id="otp" maxlength="6"
                        class="block w-full px-4 py-3 border border-purple-300 rounded-md text-center text-xl tracking-widest text-purple-900 placeholder-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                        placeholder="••••••" required pattern="\d{6}">
                </div>

                <button type="submit"
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-4 rounded-md transition duration-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-offset-1">
                    Verify OTP
                </button>
            </form>

            <div class="mt-4 text-center">
                <button id="resendOtpBtn"
                    class="text-purple-600 hover:underline font-medium transition"
                    onclick="resendOtp()" disabled>
                    Resend OTP <span id="resendCountdown">(60s)</span>
                </button>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script>
        let countdown = 60;
        const resendBtn = document.getElementById('resendOtpBtn');
        const countdownSpan = document.getElementById('resendCountdown');

        function startCountdown() {
            resendBtn.disabled = true;
            countdownSpan.textContent = `(${countdown}s)`;

            const interval = setInterval(() => {
                countdown--;
                countdownSpan.textContent = `(${countdown}s)`;

                if (countdown <= 0) {
                    clearInterval(interval);
                    resendBtn.disabled = false;
                    countdownSpan.textContent = '';
                    countdown = 60; // Reset for next time
                }
            }, 1000);
        }

        function resendOtp() {
            fetch("{{ route('resend-otp') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      alert('OTP resent to your email!');
                  } else {
                      alert('Failed to resend OTP.');
                  }
              }).catch(() => {
                  alert('Something went wrong.');
              });

            startCountdown();
        }

        // Start countdown on page load
        window.addEventListener('DOMContentLoaded', startCountdown);
    </script>
@endpush
