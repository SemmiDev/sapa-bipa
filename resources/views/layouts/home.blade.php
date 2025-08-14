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

    <style>
        .prose {
            line-height: 1.5;
            font-size: 1.1rem;
        }
        .prose p {
            /* margin-bottom: 1.5rem; */
        }
        .prose i, .prose em {
            font-style: italic;
        }
        .prose b, .prose strong {
            font-weight: 700;
        }
        .prose ul {
            list-style-type: disc;
            list-style-position: inside;
            /* margin-bottom: 1.5rem; */
            padding-left: 1rem;
        }
        .prose ol {
            list-style-type: decimal;
            list-style-position: inside;
            /* margin-bottom: 1.5rem; */
            padding-left: 1rem;
        }
        .prose li {
            /* margin-bottom: 0.5rem; */
        }
        .prose table {
            width: 100%;
            border-collapse: collapse;
            /* margin-bottom: 1.5rem; */
            background-color: #ffffff;
            border: 1px solid #e5e7eb; /* gray-200 */
        }
        .prose th,
        .prose td {
            padding: 0.75rem;
            border: 1px solid #e5e7eb; /* gray-200 */
            text-align: left;
        }
        .prose th {
            background-color: #f3f4f6; /* gray-100 */
            font-weight: 600;
            color: #1f2937; /* gray-900 */
        }
        .prose td i, .prose td em {
            color: #4b5563; /* gray-600 */
        }
        /* Quill-specific font size classes */
        .prose .ql-size-small {
            font-size: 0.75rem; /* smaller text */
        }
        .prose .ql-size-large {
            font-size: 1.25rem; /* larger text */
        }
        .prose .ql-size-huge {
            font-size: 1.5rem; /* even larger text */
        }
        /* Quill header classes */
        .prose .ql-size-h1 {
            font-size: 2rem;
            font-weight: 700;
            /* margin-bottom: 1rem; */
        }
        .prose .ql-size-h2 {
            font-size: 1.5rem;
            font-weight: 600;
            /* margin-bottom: 0.75rem; */
        }
        .prose .ql-size-h3 {
            font-size: 1.25rem;
            font-weight: 600;
            /* margin-bottom: 0.5rem; */
        }
        /* Quill alignment classes */
        .prose .ql-align-center {
            text-align: center;
        }
        .prose .ql-align-right {
            text-align: right;
        }
        .prose .ql-align-justify {
            text-align: justify;
        }
        /* Quill list indentation */
        .prose .ql-indent-1 {
            padding-left: 2rem;
        }
        .prose .ql-indent-2 {
            padding-left: 4rem;
        }
        .prose .ql-indent-3 {
            padding-left: 6rem;
        }
    </style>


    <style>
        .game-content {
            color: #374151;
            line-height: 0.6cm;
            font-size: 13px;
        }

        .game-content p {}

        .game-content ul {
            list-style-type: disc;
            list-style-position: inside;
            padding-left: 1rem;
        }

        .game-content li {}

        .game-content table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
        }

        .game-content th,
        .game-content td {
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            text-align: left;
        }

        .game-content th {
            background-color: #f3f4f6;
            font-weight: 600;
            /* gray-900 */
        }

        .game-content td i {
            color: #4b5563;
        }
    </style>

</head>

<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex-shrink-0 flex items-center">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-primary-orange to-primary-green rounded-full flex items-center justify-center mr-3">
                        <img src="{{ asset('logo.png') }}" alt="SAPA BIPA Logo">
                    </div>
                    <span class="text-xl font-bold text-gray-800">SAPA BIPA</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/"
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Tentang
                            Kami</a>

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
                            class="nav-link px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">🕹️
                            Permainan</a>
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
                    class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-orange hover:bg-orange-50 transition-all duration-200">Tentang
                    Kami</a>

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
                    <p class="text-gray-300 text-sm">Pos-el: ikadubasriau@gmail.com</p>
                    <p class="text-gray-300 text-sm">Kontak: 082286480011</p>
                    <p class="text-gray-300 text-sm">Instagram : @dutabahasariau</p>
                    <p class="text-gray-300 text-sm mt-2">Ikuti Kami:</p>
                    <a class="flex space-x-4 mt-2" href="https://www.instagram.com/dutabahasariau">
                        <span class="[&>svg]:h-5 [&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">&copy; 2025 SAPA BIPA. Hak cipta dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>
    <!-- JavaScript for Smooth Scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
