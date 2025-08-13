@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
     <div class="min-h-screen py-12 bg-gray-100">
        <!-- Back Navigation -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <a href="/articles" aria-label="Kembali ke Halaman Artikel"
                class="flex items-center text-green-600 hover:text-yellow-400 transition-colors duration-200">
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
                <div class="aspect-video bg-gradient-to-r from-green-600 to-yellow-400 relative">
                    <div class="absolute inset-0 bg-[url('/images/batik-pattern.png')] bg-cover bg-center opacity-10"></div>
                    <img src="https://images.pexels.com/photos/256490/pexels-photo-256490.jpeg?auto=compress&cs=tinysrgb&w=800"
                         alt="Ilmu Pembelajaran" class="w-full h-full object-cover mix-blend-overlay">
                </div>
                <div class="p-8">
                    <div class="flex flex-wrap items-center gap-4 mb-4">
                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">Pendidikan</span>
                        <span class="text-gray-500 text-sm">5 menit baca</span>
                        <span class="text-gray-500 text-sm">15 Januari 2025</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 animate-fade-in-up">Ilmu Pembelajaran</h1>
                    <p class="text-gray-600 mb-4">Oleh Dr. Sarah Johnson</p>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <p class="text-base md:text-lg text-gray-700 mb-6 leading-relaxed">
                    Memahami cara kita belajar adalah kunci untuk meningkatkan hasil pendidikan. Penelitian neurosains terbaru telah mengungkap wawasan menarik tentang mekanisme pembelajaran dan pembentukan memori.
                </p>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Proses Pembelajaran Otak</h3>
                <p class="text-base md:text-lg text-gray-700 mb-6 leading-relaxed">
                    Saat kita mempelajari sesuatu yang baru, otak kita menciptakan jalur saraf baru. Proses ini, yang disebut neuroplastisitas, memungkinkan otak untuk berorganisasi ulang dan beradaptasi sepanjang hidup kita. Faktor-faktor utama yang meningkatkan pembelajaran meliputi:
                </p>
                <ul class="list-disc list-inside text-base md:text-lg text-gray-700 mb-6 space-y-2">
                    <li>Keterlibatan aktif dengan materi</li>
                    <li>Pengulangan terjadwal dari waktu ke waktu</li>
                    <li>Menghubungkan informasi baru dengan pengetahuan yang sudah ada</li>
                    <li>Tidur yang cukup untuk konsolidasi memori</li>
                </ul>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Aplikasi Praktis</h3>
                <p class="text-base md:text-lg text-gray-700 mb-6 leading-relaxed">
                    Wawasan ilmiah ini dapat diterapkan untuk menciptakan strategi pembelajaran yang lebih efektif. Platform pembelajaran interaktif, seperti permainan edukasi, memanfaatkan prinsip-prinsip ini untuk membuat pembelajaran lebih menarik dan mudah diingat.
                </p>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-green-50 to-yellow-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                    Lanjutkan Belajar
                </h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Siap menerapkan pengetahuan ini? Jelajahi permainan dan aktivitas interaktif kami.
                </p>
                <a href="/games" aria-label="Lanjutkan ke Permainan Interaktif SAPA BIPA"
                    class="next-button bg-gradient-to-r from-green-600 to-yellow-400 text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Lanjutkan ke Permainan →
                </a>
            </div>
        </section>
    </div>
@endsection
