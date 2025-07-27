<!-- Header -->
<header class="gradient-bg text-white shadow-lg">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                    clip-rule="evenodd"></path>
            </svg>
            <h1 class="text-2xl font-bold">{{ $options['app_name'] ?? 'Matka Minds' }}</h1>
        </div>
        <nav>
            <button id="menu-toggle-btn" class="md:hidden text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul class="hidden md:flex space-x-6">
                <li>
                    <a href="{{ route('getAllNotificationOfUser') }}"
                        class="btn-white text-black px-6 py-3 rounded-lg hover:opacity-90 transition flex items-center relative">
                        <div class="relative">
                            <i class="fa-solid fa-bell text-yellow-400 text-lg"></i>
                            <!-- Notification Badge -->
                            <span
                                class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-semibold rounded-full px-1.5 py-0.5 leading-none">
                                {{ $unreadNotificationCount ?? 10 }}
                            </span>
                        </div>
                        <span class="ml-2">Notifications</span>
                    </a>
                </li>

                @if (Auth::user())
                    {{-- <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="text-purple-100 hover:text-white font-medium transition duration-200">
                                Logout
                            </button>
                        </form>
                    </li> --}}
                @else
                    <li><a href="#intro" class="hover:text-indigo-200 transition">Login</a></li>
                    <li><a href="{{ route('') }}" class="hover:text-indigo-200 transition">Signup</a></li>
                @endif
            </ul>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-indigo-800 py-2">
        <ul class="container mx-auto px-4 space-y-2">
            <li><a href="#intro" class="block py-2 hover:text-indigo-200 transition">Home</a></li>
            <li><a href="#play" class="block py-2 hover:text-indigo-200 transition">Play</a></li>
            <li><a href="#refund" class="block py-2 hover:text-indigo-200 transition">Refund</a></li>
            <li><a href="#trends" class="block py-2 hover:text-indigo-200 transition">Trends</a></li>
            <li><a href="#doubt" class="block py-2 hover:text-indigo-200 transition">Prediction</a></li>
        </ul>
    </div>
</header>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.getElementById('menu-toggle-btn');
            const mobileMenu = document.getElementById('mobileMenu');

            toggleBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Optional: auto-close menu on mobile when a link is clicked
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        });
    </script>
@endpush
