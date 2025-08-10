<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Feedback App')</title>

    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- <link rel="stylesheet" href="/build/assets/app-CmtpiSwD.css">
	<script src="/build/assets/app-X2UW5owF.js" defer></script> --}}
    @yield('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex-shrink-0 flex items-center">
                    <div
                        class="w-11 h-11 bg-gradient-to-r from-primary-orange to-primary-green rounded-full flex items-center justify-center mr-3">
                        <img src="{{ asset('logo.png') }}">
                    </div>
                    <span class="text-2xl font-bold text-gray-800">SAPA BIPA</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">About
                            Us</a>

                        <!-- Articles Dropdown -->
                        <div class="relative dropdown">
                            <button
                                class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200 flex items-center">
                                Articles
                                <svg class="ml-1 w-4 h-4 transform transition-transform duration-200"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div
                                class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible transform translate-y-1 transition-all duration-200">
                                <a href="/articles"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-primary-orange transition-colors duration-200 rounded-t-lg">Artikel</a>
                                <a href="/vocabularies" data-route="/kosakata"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-primary-orange transition-colors duration-200 rounded-b-lg">Kosakata</a>
                            </div>
                        </div>

                        <a href="/games" data-route="/games"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Games</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-primary-orange hover:bg-orange-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-orange transition-all duration-200">
                        <svg class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="/"
                    class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">About
                    Us</a>

                <div class="mobile-dropdown">
                    <button
                        class="mobile-dropdown-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200 flex items-center justify-between">
                        Articles
                        <svg class="w-4 h-4 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="mobile-dropdown-menu hidden ml-4 space-y-1">
                        <a href="/articles"
                            class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Artikel</a>
                        <a href="/vocabularies"
                            class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Kosakata</a>
                    </div>
                </div>

                <a href="/games" data-route="/games"
                    class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Games</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main id="main-content" class="flex-grow transition-all duration-500">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-primary-orange to-primary-green rounded-full flex items-center justify-center mr-2">
                            <span class="text-white font-bold">E</span>
                        </div>
                        <span class="text-xl font-bold">EduPlay</span>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">Interactive learning platform designed to make
                        education fun and engaging for all ages.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" data-route="/"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">About
                                Us</a></li>
                        <li><a href="#" data-route="/artikel"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">Artikel</a>
                        </li>
                        <li><a href="/vocabularies" data-route="/kosakata"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">Kosakata</a>
                        </li>
                        <li><a href="/games" data-route="/games"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">Games</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p class="text-gray-300 text-sm">Email: hello@eduplay.com</p>
                    <p class="text-gray-300 text-sm">Phone: +1 (555) 123-4567</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">&copy; 2025 EduPlay. All rights reserved.</p>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>

</html>
