<!-- Header -->
<header class="gradient-bg text-white shadow-lg">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                    clip-rule="evenodd"></path>
            </svg>
            <h1 class="text-2xl font-bold">Court of Matka</h1>
        </div>
        <nav>
            <button @click="toggleMenu()" class="md:hidden text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <ul class="hidden md:flex space-x-6">
                @if (Auth::user())
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="text-purple-100 hover:text-white font-medium transition duration-200">
                                Logout
                            </button>

                        </form>
                    </li>
                @else
                    <li><a href="#intro" class="hover:text-indigo-200 transition">Login</a></li>
                    <li><a href="{{ route('') }}" class="hover:text-indigo-200 transition">Signup</a></li>
                @endif
            </ul>
        </nav>
    </div>
    <!-- Mobile Menu -->
    <div x-show="mobileMenu" x-transition="" class="md:hidden bg-indigo-800 py-2">
        <ul class="container mx-auto px-4 space-y-2">
            <li><a href="#intro" class="block py-2 hover:text-indigo-200 transition"
                    @click="mobileMenu = false">Home</a></li>
            <li><a href="#play" class="block py-2 hover:text-indigo-200 transition"
                    @click="mobileMenu = false">Play</a></li>
            <li><a href="#refund" class="block py-2 hover:text-indigo-200 transition"
                    @click="mobileMenu = false">Refund</a></li>
            <li><a href="#trends" class="block py-2 hover:text-indigo-200 transition"
                    @click="mobileMenu = false">Trends</a></li>
            <li><a href="#doubt" class="block py-2 hover:text-indigo-200 transition"
                    @click="mobileMenu = false">Prediction</a></li>
        </ul>
    </div>
</header>
