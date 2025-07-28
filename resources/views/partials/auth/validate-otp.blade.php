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
    <script src="{{ asset('assets/js/auth/index.js') }}"></script>
    <script>
        let countdown = 60;
        let countdownInterval = null;

        const resendBtn = document.getElementById('resendOtpBtn');
        const countdownSpan = document.getElementById('resendCountdown');

        function startCountdown() {
            // Clear existing interval if any
            if (countdownInterval) clearInterval(countdownInterval);

            resendBtn.disabled = true;
            updateCountdownText();

            countdownInterval = setInterval(() => {
                countdown--;
                updateCountdownText();

                if (countdown <= 0) {
                    clearInterval(countdownInterval);
                    resendBtn.disabled = false;
                    countdownSpan.textContent = '';
                    countdown = 60;
                }
            }, 1000);
        }

        function updateCountdownText() {
            countdownSpan.textContent = `(${countdown}s)`;
        }

        function resendOtp() {
            resendBtn.disabled = true;
            resendBtn.innerText = 'Sending...';

            $.ajax({
                url: "{{ route('resend-otp') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    $.blockUI();
                },
                success: function(response) {
                    $.unblockUI();
                    resendBtn.innerText = 'Resend OTP';
                    if (response.success) {
                        showToast("success", response.message || "OTP resent successfully.");
                    } else {
                        showToast("error", response.message || "Failed to resend OTP.");
                    }
                },
                error: function() {
                    $.unblockUI();
                    resendBtn.innerText = 'Resend OTP';
                    showToast("error", "Server error. Please try again.");
                },
                complete: function() {
                    startCountdown();
                }
            });
        }

        // Automatically start countdown when page loads
        window.addEventListener('DOMContentLoaded', startCountdown);
    </script>
@endpush
