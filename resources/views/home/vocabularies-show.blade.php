@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
      <div class="min-h-screen py-12 bg-gray-100">
        <!-- Back Navigation -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <a href="/vocabularies" aria-label="Kembali ke Halaman Kosa Kata"
                class="flex items-center text-green-600 hover:text-yellow-400 transition-colors duration-200">
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
                <div class="aspect-video bg-gradient-to-r from-green-600 to-yellow-400 relative">
                    <div class="absolute inset-0 bg-[url('/images/batik-pattern.png')] bg-cover bg-center opacity-10"></div>
                    <img src="https://images.pexels.com/photos/159711/books-bookstore-book-reading-159711.jpeg?auto=compress&cs=tinysrgb&w=800"
                         alt="Kosa Kata Akademik" class="w-full h-full object-cover mix-blend-overlay">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-6xl mb-4">🎓</div>
                            <h1 class="text-3xl md:text-4xl font-bold animate-fade-in-up">Kosa Kata Akademik</h1>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                        Kata-kata penting untuk kesuksesan akademik
                    </p>
                </div>
            </div>
        </div>

        <!-- Vocabulary Words -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300">
                    <div class="mb-4">
                        <h3 class="text-2xl font-bold text-green-500">Menganalisis</h3>
                        <p class="text-lg text-gray-600">Analyze</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tips Section -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="bg-gradient-to-r from-green-50 to-yellow-50 rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center animate-fade-in-up">💡 Tips Belajar</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-green-600 mb-3">Tips Format Nama</h3>
                        <p class="text-sm text-gray-600 mb-2">Saat membuat nama pengguna atau profil, gunakan format ini:</p>
                        <code class="bg-gray-100 px-2 py-1 rounded text-sm">nama_negara_peran</code>
                        <p class="text-xs text-gray-500 mt-2">Contoh: sarah_usa_siswa</p>
                    </div>
                    <div class="bg-white rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-green-600 mb-3">📝 Buat Kartu Flash</h3>
                        <p class="text-sm text-gray-600">Tulis kosa kata baru di kartu flash dan ulas secara teratur untuk membantu mengingatnya lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-green-50 to-yellow-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">Latih Kosa Kata Anda</h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Uji pengetahuan Anda dengan permainan interaktif yang dirancang untuk memperkuat kosa kata ini.
                </p>
                <a href="/games" aria-label="Mainkan Permainan Kosa Kata SAPA BIPA"
                    class="next-button bg-gradient-to-r from-green-600 to-yellow-400 text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Mainkan Permainan Kosa Kata →
                </a>
            </div>
        </section>
    </div>
@endsection
