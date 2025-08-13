@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
     <div class="min-h-screen bg-gray-100">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-r from-orange-500 via-orange-400 to-green-500 py-20">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="animate-fade-in-up">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        Selamat Datang di <span class="text-yellow-200">SAPA BIPA</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-white mb-8 max-w-3xl mx-auto leading-relaxed">
                        Belajar Bahasa Indonesia dan budaya lokal secara menyenangkan, interaktif, dan kontekstual melalui permainan digital inovatif.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#perkenalan" aria-label="Mulai Belajar SAPA BIPA"
                            class="next-button bg-white text-orange-500 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                            Mulai Belajar →
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div id="perkenalan" class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tentang SAPA BIPA</h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        SAPA BIPA (Sahabat Pembelajar Bahasa Indonesia untuk Penutur Asing) adalah platform pembelajaran interaktif yang menggabungkan bahasa dan budaya Indonesia melalui pendekatan Digital Game-Based Learning (DGBL). Kami menghadirkan pengalaman belajar yang menyenangkan, kontekstual, dan efektif untuk penutur asing, lembaga pengelola BIPA, dan pengajar.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center group">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Konten Multisensori</h3>
                        <p class="text-gray-600 leading-relaxed">Materi pembelajaran menggabungkan audio, visual, dan interaksi langsung untuk pengalaman belajar yang kaya dan mendalam, diadaptasi dari BIPA Daring Kementerian Pendidikan.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-yellow-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Pembelajaran Interaktif</h3>
                        <p class="text-gray-600 leading-relaxed">Permainan digital dengan tantangan menarik untuk meningkatkan keterlibatan dan retensi pengetahuan.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 bg-gradient-to-r from-pink-500 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Platform Adaptif</h3>
                        <p class="text-gray-600 leading-relaxed">Desain responsif yang mendukung pembelajaran di berbagai perangkat dan lingkungan belajar.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="py-20 bg-gradient-to-r from-green-50 to-orange-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Misi Kami</h2>
                        <p class="text-lg md:text-xl text-gray-600 mb-6 leading-relaxed">
                            SAPA BIPA bertujuan menginternasionalisasikan Bahasa Indonesia melalui pengalaman belajar yang inovatif, inklusif, dan menyenangkan, sekaligus memperkenalkan kekayaan budaya nusantara.
                        </p>
                        <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                            Dengan pendekatan Digital Game-Based Learning, kami menggabungkan teknologi dan metode pedagogis untuk menciptakan pembelajaran yang interaktif, kontekstual, dan efektif bagi penutur asing, pengajar, dan lembaga BIPA.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button data-next="/explore-content" aria-label="Jelajahi Konten SAPA BIPA"
                                class="next-button bg-gradient-to-r from-orange-500 to-green-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                Jelajahi Konten Kami →
                            </button>
                            {{-- <button data-next="/for-instructors" aria-label="Integrasikan SAPA BIPA di Kelas Anda"
                                class="next-button bg-gradient-to-r from-blue-500 to-purple-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                Integrasikan di Kelas Anda →
                            </button> --}}
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-xl">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-orange-500 mb-2">10K+</div>
                                <div class="text-gray-600">Pembelajar Aktif</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-green-500 mb-2">500+</div>
                                <div class="text-gray-600">Materi Pembelajaran</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-blue-500 mb-2">50+</div>
                                <div class="text-gray-600">Permainan Interaktif</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-purple-500 mb-2">95%</div>
                                <div class="text-gray-600">Tingkat Kepuasan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Learning Journey Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Perjalanan Belajar SAPA BIPA</h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Mulai dari pre-test sederhana hingga permainan interaktif, SAPA BIPA dirancang untuk membuat pembelajaran Bahasa Indonesia dan budaya lokal menjadi pengalaman yang menyenangkan dan bermakna. Materi kami diadaptasi dari BIPA Daring Kementerian Pendidikan Dasar dan Menengah.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gradient-to-r from-pink-500 to-yellow-500 text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-semibold mb-4">Pre-Test</h3>
                        <p class="text-gray-100 leading-relaxed mb-4">
                            Mulai perjalanan Anda dengan pre-test sederhana untuk mengetahui kemampuan awal Anda dalam Bahasa Indonesia.
                        </p>
                        <p class="text-gray-100 leading-relaxed">
                            Tes ini membantu menyesuaikan materi pembelajaran dengan kebutuhan Anda, membuat pengalaman belajar lebih personal.
                        </p>
                    </div>
                    <div class="bg-gradient-to-r from-orange-500 to-green-500 text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-semibold mb-4">Level 1 - Pemula</h3>
                        <p class="text-gray-100 leading-relaxed mb-4">
                            Untuk peserta yang baru mulai belajar Bahasa Indonesia. Materi mencakup kosa kata dasar, salam, angka, warna, pekerjaan, dan ungkapan sehari-hari.
                        </p>
                        <p class="text-gray-100 leading-relaxed">
                            Berisi 15 soal interaktif dengan desain visual menarik dan tantangan berbasis waktu untuk meningkatkan motivasi belajar.
                        </p>
                    </div>
                    <div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-semibold mb-4">Level 2 - Lanjutan</h3>
                        <p class="text-gray-100 leading-relaxed mb-4">
                            Untuk peserta dengan kemampuan dasar yang ingin memperdalam bahasa dan budaya Indonesia.
                        </p>
                        <p class="text-gray-100 leading-relaxed">
                            Tantangan lebih kompleks dengan 15 soal interaktif yang mengasah keterampilan berbahasa dan pemahaman budaya.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
