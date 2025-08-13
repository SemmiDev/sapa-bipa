@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
  <div class="min-h-screen py-12 bg-gray-100">
        <!-- Page Header -->
        <section class="relative bg-gradient-to-r from-teal-600 to-orange-400 py-16 overflow-hidden">
            <div class="absolute inset-0 bg-[url('/images/batik-pattern.png')] bg-cover bg-center opacity-10"></div>
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
                    <a href="/games/1/show" aria-label="Mainkan Teka-Teki Kata"
                       class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                        <div class="h-40 bg-gradient-to-r from-teal-600 to-orange-400 flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
                                </svg>
                                <p class="font-semibold">Teka-Teki Kata</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Teka-Teki Kata</h3>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm bg-gray-100 text-gray-600 px-2 py-1 rounded">Mudah</span>
                                <span class="text-sm text-gray-500">1-100 pemain</span>
                            </div>
                            <button
                                class="w-full bg-gradient-to-r from-teal-600 to-orange-400 text-white py-2 rounded-lg font-medium hover:shadow-lg transition-all duration-300">
                                Mainkan Sekarang
                            </button>
                        </div>
                    </a>
                </div>

                <!-- Featured Game -->
                <div class="bg-gradient-to-r from-teal-50 to-orange-50 rounded-2xl p-8">
                    <div class="max-w-4xl mx-auto">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div>
                                <h3 class="text-3xl font-bold text-gray-900 mb-4 animate-fade-in-up">
                                    Unggulan: Petualangan Kata
                                </h3>
                                <p class="text-base md:text-lg text-gray-600 mb-6 leading-relaxed">
                                    Mulai petualangan epik di mana pengetahuan kosa kata adalah senjata terbesar Anda. Pecahkan teka-teki, hadapi tantangan, dan buka level baru sambil memperluas kosa kata Anda.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <span
                                        class="bg-teal-600 text-white px-3 py-1 rounded-full text-sm font-medium">Petualangan</span>
                                    <span
                                        class="bg-orange-400 text-white px-3 py-1 rounded-full text-sm font-medium">Kosa Kata</span>
                                    <span
                                        class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">Banyak Pemain</span>
                                </div>
                                <button
                                    class="bg-gradient-to-r from-teal-600 to-orange-400 text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    Mainkan Sekarang →
                                </button>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <div
                                    class="aspect-video bg-gradient-to-r from-teal-600 to-orange-400 rounded-lg flex items-center justify-center">
                                    <div class="text-white text-center">
                                        <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
                                        </svg>
                                        <p class="font-semibold">Pratinjau Interaktif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-teal-50 to-orange-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                    Siap Mengulang?
                </h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Selamat atas perjalanan belajar Anda! Siap menjelajahi lebih banyak konten dan terus membangun pengetahuan Anda?
                </p>
                <a href="/" aria-label="Kembali ke Beranda SAPA BIPA"
                    class="next-button bg-gradient-to-r from-teal-600 to-orange-400 text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Kembali ke Beranda →
                </a>
            </div>
        </section>
    </div>
@endsection
