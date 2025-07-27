<!-- Signup Form -->
<div x-show="!isLogin" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" id="signup_form_container">
    <h2 id="createaccount" class="text-2xl font-bold text-gray-800 mb-6">Create an account</h2>

    <form class="space-y-4" id="signup_form" method="post">
        @csrf
        <!-- Name -->
        <div>
            <label for="signup-name" class="block text-sm font-medium text-gray-700 mb-1">Full
                Name</label>
            <input type="text" id="signup-name" name="name"
                class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                placeholder="John Doe" required>
        </div>

        <!-- Phone -->
        <div>
            <label for="signup-phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" id="signup-phone" name="phone"
                class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                placeholder="Enter your phone number" required pattern="[0-9]{10}">
        </div>


        <!-- Email -->
        <div>
            <label for="signup-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="signup-email" name="email"
                class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                placeholder="your@email.com" required>
        </div>

        <!-- Password -->
        <div>
            <label for="signup-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="signup-password" name="password"
                class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                placeholder="••••••••" required minlength="6">
        </div>
        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm
                Password</label>
            <input type="password" id="password_confirmation"
                class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                name="password_confirmation" placeholder="••••••••" required minlength="6">
        </div>

        <!-- Terms -->
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input id="terms" name="agreed_terms" type="checkbox"
                    class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded" required
                    value="1" checked>
            </div>
            <div class="ml-3 text-sm">
                <label for="terms" class="text-gray-600">I agree to the <a href="#"
                        class="text-purple-600 hover:text-purple-800">Terms of Service</a> and <a href="#"
                        class="text-purple-600 hover:text-purple-800">Privacy
                        Policy</a></label>
            </div>
        </div>

        <!-- Signup Button -->
        <button type="submit" class="btn-primary w-full py-2 px-4 rounded-md text-white font-medium"
            onclick="event.preventDefault(); submitAuthForm('{{ route('login.store') }}', '#signup_form')">
            Create Account
        </button>

    </form>

    {{-- <!-- Social Signup -->
    <div class="mt-6">
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Or sign up with</span>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-2 gap-3">
            <button type="button" class="btn-secondary flex justify-center items-center py-2 px-4 rounded-md">
                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.56 12.25C22.56 11.47 22.49 10.72 22.36 10H12V14.26H17.92C17.66 15.63 16.88 16.79 15.71 17.57V20.34H19.28C21.36 18.42 22.56 15.6 22.56 12.25Z"
                        fill="#4285F4"></path>
                    <path
                        d="M12 23C14.97 23 17.46 22.02 19.28 20.34L15.71 17.57C14.73 18.23 13.48 18.63 12 18.63C9.19 18.63 6.8 16.73 5.95 14.18H2.28V17.04C4.09 20.57 7.77 23 12 23Z"
                        fill="#34A853"></path>
                    <path
                        d="M5.95 14.18C5.73 13.52 5.6 12.81 5.6 12.08C5.6 11.35 5.73 10.64 5.95 9.98V7.12H2.28C1.46 8.61 1 10.3 1 12.08C1 13.86 1.46 15.55 2.28 17.04L5.95 14.18Z"
                        fill="#FBBC05"></path>
                    <path
                        d="M12 5.53C13.62 5.53 15.06 6.08 16.21 7.17L19.36 4.02C17.45 2.26 14.97 1.18 12 1.18C7.77 1.18 4.09 3.61 2.28 7.12L5.95 9.98C6.8 7.43 9.19 5.53 12 5.53Z"
                        fill="#EA4335"></path>
                </svg>
                Google
            </button>
            <button type="button" class="btn-secondary flex justify-center items-center py-2 px-4 rounded-md">
                <svg class="w-5 h-5 mr-2" fill="#1877F2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 12.073C24 5.40365 18.629 0 12 0C5.37097 0 0 5.40365 0 12.073C0 18.0988 4.38823 23.0935 10.125 24V15.563H7.07661V12.073H10.125V9.41306C10.125 6.38751 11.9153 4.71627 14.6574 4.71627C15.9706 4.71627 17.3439 4.95189 17.3439 4.95189V7.92146H15.8303C14.34 7.92146 13.875 8.85225 13.875 9.8069V12.073H17.2031L16.6708 15.563H13.875V24C19.6118 23.0935 24 18.0988 24 12.073Z">
                    </path>
                </svg>
                Facebook
            </button>
        </div>
    </div> --}}
</div>
