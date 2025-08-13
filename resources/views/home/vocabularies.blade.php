@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Page Header -->
        <section class="relative bg-gradient-to-r from-green-600 to-yellow-400 py-16 overflow-hidden">
            <div class="absolute inset-0 bg-[url('/images/batik-pattern.png')] bg-cover bg-center opacity-10"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
                    Panduan Kosakata & Contoh Soal
                </h1>
                <p class="text-lg md:text-xl text-white max-w-3xl mx-auto leading-relaxed mb-8">
                    Laman ini membantu penutur asing pemula menyiapkan bekal kosakata dan pola kalimat sederhana sebelum
                    memainkan permainan digital SAPA BIPA. Ikuti alur belajar:
                    <span class="font-semibold">Pre-test sederhana → Bacaan budaya lokal → Permainan Level 1 & 2</span>.
                </p>
                <p class="text-base md:text-lg text-yellow-100 italic max-w-3xl mx-auto leading-relaxed mb-8">
                    Catatan: Kosakata disajikan dalam Bahasa Indonesia dengan terjemahan Inggris di bawahnya untuk
                    memudahkan pemahaman cepat.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="/pre-test" aria-label="Mulai Pre-Test SAPA BIPA"
                        class="bg-white text-green-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                        Mulai Pre-Test
                    </a>
                </div>
            </div>
        </section>

        <!-- Vocabulary Categories -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <a href="/vocabularies/1/show"
                        class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-accent-blue to-accent-purple rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🎓</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Academic</h3>
                        <p class="text-sm text-gray-600">200+ words</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Bagian Selanjutnya -->
        <section class="py-16 bg-gradient-to-r from-green-50 to-yellow-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Uji Pengetahuan Anda</h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Terapkan kosa kata baru Anda melalui permainan interaktif yang membuat proses belajar menyenangkan dan
                    mudah diingat.
                </p>
                <button data-next="${nextRoute}"
                    class="next-button bg-gradient-to-r from-green-600 to-yellow-400 text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Mainkan Permainan Kosa Kata →
                </button>
            </div>
        </section>
    </div>
@endsection
