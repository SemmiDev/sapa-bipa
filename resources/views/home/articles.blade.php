@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12 bg-gray-100">
        <!-- Page Header -->
        <section class="relative bg-gradient-to-r from-primary-blue to-primary-orange py-16 overflow-hidden">
            <div class="absolute inset-0 bg-[url('/images/batik-pattern.png')] bg-cover bg-center opacity-10"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
                    Artikel
                </h1>
                <p class="text-lg md:text-xl text-white max-w-3xl mx-auto leading-relaxed">
                    Temukan artikel-artikel mendalam yang dirancang untuk memperdalam pemahaman Anda tentang Bahasa
                    Indonesia dan budaya lokal.
                </p>
            </div>
        </section>

        <!-- Articles Grid -->
        <section class="py-16 bg-white">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($articles as $article)
            <a href="/articles/{{ $article->id }}/show"
               aria-label="Baca artikel {{ $article->title }}"
               class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                <div class="h-48 relative">
                    @if ($article->thumbnail_url)
                        <img src="{{ $article->thumbnail_url }}"
                             alt="{{ $article->title }} thumbnail"
                             class="w-full h-full object-cover">
                    @else
                        <div class="h-full bg-gradient-to-r from-primary-blue to-primary-orange flex items-center justify-center">
                            <svg class="w-12 h-12 mx-auto mb-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                            </svg>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4 bg-primary-blue text-white text-sm font-semibold px-3 py-1 rounded-full">
                        {{ $article->articleCategory->name ?? 'Pendidikan' }}
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $article->title }}</h3>
                    <p class="text-gray-600 text-base mb-4">
                        {{ Str::limit(strip_tags($article->content), 100, '...') }}
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">{{ $article->reading_time }} menit baca</span>
                        <span class="text-primary-blue font-medium hover:text-primary-orange transition-colors duration-200">
                            Baca Selengkapnya →
                        </span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
        </section>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-secondary-50 to-primary-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                    Siap Bermain?
                </h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Lanjutkan perjalanan belajar Anda dengan permainan interaktif yang memperkuat konsep dari artikel yang
                    telah Anda baca.
                </p>
                <a href="/games" aria-label="Mainkan Permainan Interaktif SAPA BIPA"
                    class="next-button bg-gradient-to-r from-primary-blue to-primary-orange text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Mainkan Sekarang →
                </a>
            </div>
        </section>
    </div>
@endsection
