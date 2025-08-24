@extends('layouts.home')

@section('title', 'SAPA BIPA - ' . $category->name)

@section('content')
    <div class="min-h-screen py-12 bg-gray-100">
        <!-- Back Navigation -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <a href="/vocabularies" aria-label="Kembali ke Halaman Kosa Kata"
                class="flex items-center text-primary-blue hover:text-primary-orange transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Kembali ke Kosa Kata
            </a>
        </div>

        <!-- Category Header -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-video relative">
                    @if ($category->thumbnail_url)
                        <img src="{{ $category->thumbnail_url }}" alt="{{ $category->name }} thumbnail"
                            class="w-full h-full object-cover">
                    @else
                        <div class="h-full bg-gradient-to-r from-primary-blue to-primary-orange"></div>
                    @endif
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white bg-black/40 p-3">
                            <h1 class="text-3xl md:text-4xl font-bold animate-fade-in-up">{{ $category->name }}</h1>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                        {{ $category->name }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Vocabulary Words -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($category->vocabularies as $vocabulary)
                    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300">
                        <div class="mb-4">
                            <h3 class="text-2xl font-bold text-primary-blue">{{ $vocabulary->word }}</h3>
                            <p class="text-lg text-gray-600 italic">{{ $vocabulary->meaning }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Tips Section -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="bg-gradient-to-r from-primary-50 to-secondary-50 rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center animate-fade-in-up">💡 Trik Belajar</h2>
                <div class="bg-white rounded-lg p-6">
                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-2">
                        <li>Ucapkan kata dengan suara keras 2–3 kali untuk mengingat bunyi dan arti.</li>
                        <li>Kelompokkan kosakata berdasarkan tema (warna, keluarga, pekerjaan) saat menghafal.</li>
                        <li>Latih pola kalimat sederhana: Subjek + Predikat + Objek/Keterangan. Contoh: Saya makan nasi.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-primary-50 to-secondary-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">Latih Kosa Kata Anda</h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Uji pengetahuan Anda dengan permainan interaktif yang dirancang untuk memperkuat kosa kata ini.
                </p>
                <a href="/games" aria-label="Mainkan Permainan Kosa Kata SAPA BIPA"
                    class="next-button bg-gradient-to-r from-primary-blue to-primary-orange text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Mainkan Permainan Kosa Kata →
                </a>
            </div>
        </section>
    </div>
@endsection
