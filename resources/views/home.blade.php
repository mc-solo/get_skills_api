<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @endif
</head>

<body>
    {{-- Header Area --}}
    <header class="fixed top-0 left-0 w-full z-50">
        <nav aria-label="main navigation" class="bg-gray-900 bg-opacity-75 backdrop-blur-md text-gray-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Actual Container --}}
                <div class="flex items-center justify-between h-20">
                    {{-- Logo Part --}}
                    <div class="flex items-center">
                        <a href="#" class="text-3xl font-bold">Logo</a>
                    </div>

                    {{-- Desktop Menu --}}
                    <div class="hidden md:flex space-x-4">
                        <a href="#about" class="text-2xl hover:text-white">About</a>
                        <a href="#contact" class="text-2xl hover:text-white">Contact</a>
                        <a href="#services" class="text-2xl hover:text-white">Services</a>
                    </div>

                    {{-- Mobile Hamburger Menu --}}
                    <div class="md:hidden flex items-center">
                        <button id="menu-toggle"
                            class="menu-toggle text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="hidden md:hidden">
                <a href="#home" class="block px-4 py-2 hover:bg-white">Home</a>
                <a href="#about" class="block px-4 py-2 hover:bg-white">About</a>
                <a href="#services" class="block px-4 py-2 hover:bg-white">Services</a>
            </div>
        </nav>

        {{-- Js to enable the toggle function --}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const menuToggle = document.getElementById('menu-toggle');
                const mobileMenu = document.getElementById('mobile-menu');

                menuToggle.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            });
        </script>
    </header>

    {{-- landing page with gradient --}}
    <div class="min-h-screen bg-gradient-to-tr from-gray-900 to-gray-800 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4 animate-slide-in-right">Welcome to My Landing Page</h1>
            <p class="text-lg mb-8 animate-slide-in-left">Discover amazing content and get started on your journey with
                us.</p>
            <a href="#"
                class="px-6 py-3 bg-gray-800 text-white font-semibold text-lg rounded-lg shadow-lg hover:bg-gray-700 transition ease-in-out duration-300">
                Get Started
            </a>
        </div>
    </div>


    <div class="min-h-screen bg-gradient-to-tr from-gray-500 to-gray-400 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Welcome to My Landing Page</h1>
            <p class="text-lg mb-8">Discover amazing content and get started on your journey with
                us.</p>
            <a href="#"
                class="px-6 py-3 bg-gray-800 text-white font-semibold text-lg rounded-lg shadow-lg hover:bg-gray-700 transition ease-in-out duration-300">
                Get Started
            </a>
        </div>
    </div>

    {{-- animation effects where they slide in from the right and left --}}
    <style>
        @keyframes slide-in-right {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slide-in-left {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .animate-slide-in-right {
            animation: slide-in-right 2s ease-in-out;
        }

        .animate-slide-in-left {
            animation: slide-in-left 2s ease-in-out;
        }
    </style>

</body>

</html>