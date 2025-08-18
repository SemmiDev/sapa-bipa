@extends('layouts.home')

@section('title', 'SAPA BIPA - ' . $article->title)

@section('content')
    <div class="min-h-screen py-12 bg-gray-100">
        <!-- Back Navigation -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <a href="/articles" aria-label="Kembali ke Halaman Artikel"
                class="flex items-center text-primary-blue hover:text-primary-orange transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Kembali ke Artikel
            </a>
        </div>

        <!-- Article Header -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-video">
                    @if ($article->thumbnail_url)
                        <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }} thumbnail"
                            class="w-full h-full object-cover">
                    @else
                        <div class="h-full bg-gradient-to-r from-primary-blue to-primary-orange"></div>
                    @endif
                </div>
                <div class="p-8">
                    <div class="flex flex-wrap items-center gap-4 mb-4">
                        <span class="bg-primary-blue text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ $article->articleCategory->name ?? 'Pendidikan' }}
                        </span>
                        <span class="text-gray-500 text-sm">{{ $article->reading_time }} menit baca</span>
                        <span class="text-gray-500 text-sm">{{ $article->created_at->format('d F Y') }}</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 animate-fade-in-up">{{ $article->title }}
                    </h1>
                    <p class="text-gray-600 mb-4">Oleh {{ $article->author ?? 'Penulis SAPA BIPA' }}</p>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="prose">
                    {!! $article->content !!}

                </div>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-primary-50 to-secondary-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                    Lanjutkan Belajar
                </h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Siap menerapkan pengetahuan ini? Jelajahi permainan dan aktivitas interaktif kami.
                </p>
                <a href="/games" aria-label="Lanjutkan ke Permainan Interaktif SAPA BIPA"
                    class="next-button bg-gradient-to-r from-primary-blue to-primary-orange text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Lanjutkan ke Permainan →
                </a>
            </div>
        </section>
    </div>
@endsection
