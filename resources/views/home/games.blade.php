@extends('layouts.home')

@section('title', 'SAPA BIPA - Permainan Interaktif')

@section('content')
    <div class="min-h-screen py-12 bg-gray-100">
        <!-- Page Header -->
        <section class="relative bg-gradient-to-r from-primary-blue to-primary-orange py-16 overflow-hidden">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
                    Permainan Interaktif
                </h1>
                <p class="text-lg md:text-xl text-white max-w-3xl mx-auto leading-relaxed">
                    Belajar melalui permainan dengan koleksi permainan edukasi kami yang dirancang untuk memperkuat konsep dan membuat pembelajaran tak terlupakan.
                </p>
            </div>
        </section>

        <!-- Games Grid -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    @foreach ($games as $game)
                        <a href="/games/{{ $game->id }}/show"
                           aria-label="Mainkan {{ $game->title }}"
                           class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                            <div class="h-40">
                                @if ($game->thumbnail_url)
                                    <img src="{{ $game->thumbnail_url }}"
                                         alt="{{ $game->title }} thumbnail"
                                         class="w-full h-full object-cover">
                                @else
                                    <div class="h-full bg-gradient-to-r from-primary-blue to-primary-orange flex items-center justify-center">
                                        <p class="text-white font-semibold">{{ $game->title }}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $game->title }}</h3>
                                <div class="flex justify-between items-center mb-4">
                                    <span class="text-sm bg-gray-100 text-gray-600 px-2 py-1 rounded">{{ $game->level }}</span>
                                </div>
                                <button class="w-full bg-gradient-to-r from-primary-blue to-primary-orange text-white py-2 rounded-lg font-medium hover:shadow-lg transition-all duration-300">
                                    Mainkan Sekarang
                                </button>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-primary-50 to-secondary-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                    Siap Mengulang?
                </h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Selamat atas perjalanan belajar Anda! Siap menjelajahi lebih banyak konten dan terus membangun pengetahuan Anda?
                </p>
                <a href="/" aria-label="Kembali ke Beranda SAPA BIPA"
                   class="next-button bg-gradient-to-r from-primary-blue to-primary-orange text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Kembali ke Beranda →
                </a>
            </div>
        </section>
    </div>
@endsection
