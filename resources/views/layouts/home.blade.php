<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SAPA BIPA')</title>

    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                        <img src="{{ asset('logo.png') }}" alt="SAPA BIPA Logo">
                    </div>
                    <span class="text-2xl font-bold text-gray-800">SAPA BIPA</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Tentang Kami</a>

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
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Permainan</a>
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
                    class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Tentang Kami</a>

                <div class="mobile-dropdown px-1">
                    <button
                        class="mobile-dropdown-button w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200 flex items-center justify-between">
                        Artikel
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
                    class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Permainan</a>
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
                            <img src="{{ asset('logo.png') }}" alt="SAPA BIPA Logo">
                        </div>
                        <span class="text-xl font-bold">SAPA BIPA</span>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Sahabat Pembelajar Bahasa Indonesia untuk Penutur Asing. Belajar bahasa dan budaya Indonesia
                        melalui permainan digital yang interaktif dan menyenangkan.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Halaman</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" data-route="/"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">Tentang
                                Kami</a></li>
                        <li><a href="/articles" data-route="/artikel"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">Artikel</a>
                        </li>
                        <li><a href="/vocabularies" data-route="/kosakata"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">Kosakata</a>
                        </li>
                        <li><a href="/games" data-route="/games"
                                class="text-gray-300 hover:text-primary-orange transition-colors duration-200">Permainan</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <p class="text-gray-300 text-sm">Email: hello@sapabipa.com</p>
                    <p class="text-gray-300 text-sm">Phone: +62 (21) 123-4567</p>
                    <p class="text-gray-300 text-sm mt-2">Ikuti Kami:</p>
                    <div class="flex space-x-4 mt-2">
                        <!-- Instagram -->
                        <span class="[&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </span>
                        <!-- Youtube -->
                        <span class="[&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                <path
                                    d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                            </svg>
                        </span>

                        <!-- TikTok -->
                        <span class="[&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                <path
                                    d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">&copy; 2025 SAPA BIPA. Hak cipta dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>

</html>
