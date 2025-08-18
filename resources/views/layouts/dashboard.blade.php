<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dasbor') - Feedback App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Quill core & theme --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    {{-- Quill Better Table plugin --}}
    <link href="https://cdn.jsdelivr.net/npm/quill-better-table@1.2.10/dist/quill-better-table.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/build/assets/app-D4aioymF.css">
	<script src="/build/assets/app-Bg19yiM2.js" defer></script>

    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            font-family: 'Nunito', sans-serif;
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .ProseMirror {
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 1rem;
            min-height: 150px;
            background: white;
            outline: none;
        }

        .ProseMirror:focus {
            border-color: #1d5e84;
            box-shadow: 0 0 0 3px rgba(29, 94, 132, 0.2);
        }

        .ProseMirror p.is-editor-empty:first-child::before {
            content: attr(data-placeholder);
            color: #9ca3af;
            float: left;
            height: 0;
            pointer-events: none;
        }

        .tiptap-toolbar {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            padding: 0.5rem;
            background: #f3f4f6;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem 0.5rem 0 0;
            margin-bottom: -1px;
        }

        .tiptap-toolbar button {
            background: #ffffff;
            border: 1px solid #d1d5db;
            padding: 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            color: #374151;
        }

        .tiptap-toolbar button:hover {
            background: #e5e7eb;
        }

        .tiptap-toolbar button.active {
            background: #1d5e84;
            color: white;
        }

        .ProseMirror table {
            border-collapse: collapse;
            width: 100%;
            margin: 1rem 0;
        }

        .ProseMirror th,
        .ProseMirror td {
            border: 1px solid #d1d5db;
            padding: 0.5rem;
            text-align: left;
        }

        .ProseMirror th {
            background: #f3f4f6;
            font-weight: 600;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50">
    <div class="antialiased bg-gray-50">
        <!-- Top Header Bar -->
        <header class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200 shadow-sm">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Left side: Menu toggle + Logo -->
                    <div class="flex items-center space-x-4">
                        <!-- Mobile menu button -->
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>

                        <!-- Logo and Title -->
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center space-x-2">
                                <div
                                    class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md border border-primary-blue">
                                    <img src="/logo.png" alt="Sapa Bipa Logo"
                                        class="object-contain w-16 h-16 drop-shadow" />
                                </div>
                            </div>
                            <div class="hidden sm:block">
                                <h1 class="text-lg font-semibold text-gray-900">Dasbor SAPA BIPA</h1>
                                <p class="text-xs text-gray-500">Selamat Datang</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right side: Profile dropdown -->
                    <div class="flex items-center space-x-4">
                        <!-- Profile Dropdown -->
                        <div class="relative">
                            <button type="button"
                                class="flex items-center space-x-3 text-sm bg-white border border-gray-200 rounded-full px-3 py-2 hover:bg-gray-50 focus:ring-4 focus:ring-primary-blue shadow-sm transition-colors"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                data-dropdown-placement="bottom">
                                <span class="sr-only">Buka menu pengguna</span>
                                <div class="w-8 h-8 bg-primary-blue rounded-full flex items-center justify-center">
                                    <span
                                        class="text-white text-sm font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                </div>
                                <div class="hidden sm:block text-left">
                                    <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-600">{{ ucfirst(auth()->user()->role) }}</p>
                                </div>
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg border border-gray-200"
                                id="user-dropdown">
                                <div class="px-4 py-3 bg-gray-50 rounded-t-lg">
                                    <span
                                        class="block text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</span>
                                    <span
                                        class="block text-sm text-gray-600 truncate">{{ auth()->user()->username }}</span>
                                </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="{{ route('dashboard.index') }}"
                                            class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-[#03543F] hover:text-[#03543F] transition-colors">
                                            <svg class="w-4 h-4 mr-3 text-gray-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                                            </svg>
                                            Dasbor
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="my-2 border-gray-200">
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}" class="block">
                                            @csrf
                                            <button type="submit"
                                                class="w-full flex items-center text-left px-4 py-3 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition-colors">
                                                <svg class="w-4 h-4 mr-3 text-red-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                                Keluar
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Sidebar -->
        <aside id="logo-sidebar"
            class="fixed top-16 left-0 z-40 w-64 h-[calc(100vh-4rem)] transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-white">
                <!-- Navigation Menu -->
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{ route('dashboard.index') }}"
                            class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.index') ? 'text-primary-blue border-r-4 border-primary-blue' : '' }}">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 {{ request()->routeIs('dashboard.index') ? 'text-primary-blue' : '' }}"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                </ul>

                <!-- Dashboard Menu Section -->
                <div class="mt-6">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">Menu Dasbor</h3>
                    <ul class="space-y-1 font-nunito">
                        <!-- Ringkasan (Dashboard) -->
                        <li>
                            <a href="{{ route('dashboard.index') }}"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.index') ? 'text-primary-blue border-r-4 border-primary-blue' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('dashboard.index') ? 'text-primary-blue' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                Ringkasan
                            </a>
                        </li>

                        <!-- Kelola Kategori Artikel -->
                        <li>
                            <a href="/dashboard/articles-categories"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.articles-categories.*') ? 'text-[#03543F] border-r-4 border-[#03543F]' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('dashboard.articles-categories.*') ? 'text-[#03543F]' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                                Kelola Kategori Artikel
                            </a>
                        </li>

                        <!-- Kelola Artikel -->
                        <li>
                            <a href="/dashboard/articles"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.articles.*') ? 'text-[#03543F] border-r-4 border-[#03543F]' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('dashboard.articles.*') ? 'text-[#03543F]' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                Kelola Artikel
                            </a>
                        </li>

                        <!-- Kelola Kategori Kosa Kata -->
                        <li>
                            <a href="/dashboard/vocabularies-categories"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.vocabularies-categories.*') ? 'text-[#03543F] border-r-4 border-[#03543F]' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('dashboard.vocabularies-categories.*') ? 'text-[#03543F]' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                                Kelola Kategori Kosa Kata
                            </a>
                        </li>

                        <!-- Kelola Kosa Kata -->
                        <li>
                            <a href="/dashboard/vocabularies"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.vocabularies.*') ? 'text-[#03543F] border-r-4 border-[#03543F]' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('dashboard.vocabularies.*') ? 'text-[#03543F]' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 006 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                    </path>
                                </svg>
                                Kelola Kosa Kata
                            </a>
                        </li>

                        <!-- Kelola Permainan -->
                        <li>
                            <a href="/dashboard/games"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.games.*') ? 'text-[#03543F] border-r-4 border-[#03543F]' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('dashboard.games.*') ? 'text-[#03543F]' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 12a8 8 0 01-8 8 8 8 0 01-8-8 8 8 0 018-8 8 8 0 018 8zm-5 0h-2v2m0-2h2m-1-1v-2m-3 3h-2v2m0-2h2m-1-1v-2">
                                    </path>
                                </svg>
                                Kelola Permainan
                            </a>
                        </li>

                            <!-- Kelola Permainan -->
                        <li>
                            <a href="/dashboard/proof"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('dashboard.proof.*') ? 'text-[#03543F] border-r-4 border-[#03543F]' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('dashboard.proof.*') ? 'text-[#03543F]' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                                Foto Bukti
                            </a>
                        </li>

                        <!-- Profil -->
                        <li>
                            <a href="/profil"
                                class="flex items-center px-3 py-2 text-sm text-gray-700 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('profile.*') ? 'text-[#03543F] border-r-4 border-[#03543F]' : '' }}">
                                <svg class="w-4 h-4 mr-3 {{ request()->routeIs('profile.*') ? 'text-[#03543F]' : 'text-gray-400 group-hover:text-gray-500' }}"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Profil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="p-4 sm:ml-64 mt-16">
            <div class="p-4 rounded-lg">
                @if (session('success'))
                    <div class="flex items-center p-4 mb-4 text-sm text-white border border-[#03543F] rounded-lg bg-[#03543F] animate-slide-in"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <div>{{ session('success') }}</div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-[#03543F] text-[#03543F] rounded-lg focus:ring-2 focus:ring-[#03543F] p-1.5 hover:bg-[#03543F] inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-border-3" aria-label="Close">
                            <span class="sr-only">Tutup</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 animate-slide-in"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <div>{{ session('error') }}</div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-border-1" aria-label="Close">
                            <span class="sr-only">Tutup</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    @stack('scripts')
</body>

</html>
