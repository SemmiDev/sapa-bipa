@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-r from-primary-orange to-primary-blue py-20">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="animate-fade-in-up">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        Selamat Datang di <span class="text-secondary-100">SAPA BIPA</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-white mb-8 max-w-3xl mx-auto leading-relaxed">
                        Belajar bahasa Indonesia dan budaya lokal secara menyenangkan, interaktif, dan kontekstual melalui
                        permainan digital inovatif.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#perkenalan" aria-label="Mulai Belajar SAPA BIPA"
                           class="next-button bg-white text-primary-orange px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                            Selengkapnya →
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
         <section id="perkenalan" class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
                    Tentang SAPA BIPA
                </h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed px-2">
                    SAPA BIPA (Sahabat Pemelajar Bahasa Indonesia bagi Penutur Asing) adalah platform pembelajaran
                    interaktif yang menggabungkan bahasa dan budaya Indonesia melalui pendekatan
                    <span class="italic font-medium text-primary-blue">Digital Game-Based Learning (DGBL)</span>.
                    Kami menghadirkan pengalaman belajar yang menyenangkan, kontekstual, dan efektif
                    untuk penutur asing, lembaga pengelola BIPA, dan pengajar.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <!-- Feature 1: Pembelajaran Kontekstual -->
                <div class="text-center group p-4 sm:p-6 rounded-xl hover:bg-gray-50 transition-all duration-300">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-r from-primary-blue to-primary-orange rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <!-- Globe Icon -->
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-3">Pembelajaran Kontekstual</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        Setiap permainan disajikan dalam konteks budaya dan situasi nyata di Indonesia, membantu pembelajar menggunakan bahasa secara praktis dan alami.
                    </p>
                </div>

                <!-- Feature 2: Pembelajaran Interaktif -->
                <div class="text-center group p-4 sm:p-6 rounded-xl hover:bg-gray-50 transition-all duration-300">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-r from-primary-orange to-primary-blue rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <!-- User Group Icon -->
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-3">Pembelajaran Interaktif</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        Permainan digital dengan tantangan menarik untuk meningkatkan keterlibatan dan retensi pengetahuan.
                    </p>
                </div>

                <!-- Feature 3: Platform Adaptif -->
                <div class="text-center group p-4 sm:p-6 rounded-xl hover:bg-gray-50 transition-all duration-300">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-r from-primary-blue to-primary-orange rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <!-- Device Mobile Icon -->
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zM8 4h4v10H8V4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-3">Platform Adaptif</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        Desain responsif yang mendukung pembelajaran di berbagai perangkat dan lingkungan belajar.
                    </p>
                </div>

                <!-- Feature 4: Desain Permainan Berlevel -->
                <div class="text-center group p-4 sm:p-6 rounded-xl hover:bg-gray-50 transition-all duration-300">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-r from-primary-orange to-primary-blue rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <!-- Game Controller Icon -->
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 5v1H4.5a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.5 1.5H6v1a2 2 0 104 0V6a2 2 0 10-4-1zm2.5 2.5a1 1 0 100-2 1 1 0 000 2zm5 0a1 1 0 100-2 1 1 0 000 2zM12 9a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-3">Desain Permainan Berlevel</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">
                        Dirancang dalam berbagai level dan jenis tantangan yang variatif. Pendekatan ini membuat proses belajar lebih interaktif, menyenangkan, serta mendorong keterlibatan aktif penutur asing secara berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </section>

        <!-- Mission Section -->
        <section class="py-20 bg-gradient-to-r from-secondary-50 to-primary-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Misi Kami</h2>
                        <p class="text-lg md:text-xl text-gray-600 mb-6 leading-relaxed">
                            SAPA BIPA bertujuan untuk menginternasionalkan bahasa Indonesia melalui pengalaman belajar yang
                            inovatif, inklusif, dan menyenangkan, sekaligus memperkenalkan kekayaan budaya nusantara.
                        </p>
                        <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                            Dengan pendekatan <span class="italic">Digital Game-Based Learning</span>, kami menggabungkan teknologi dan metode pedagogis
                            untuk menciptakan pembelajaran yang interaktif, kontekstual, dan efektif bagi penutur asing,
                            pengajar, dan lembaga BIPA.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#perjalanan" aria-label="Perjalanan Belajar SAPA BIPA"
                               class="next-button bg-gradient-to-r from-primary-orange to-primary-blue text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                Perjalanan Belajar →
                            </a>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-xl">
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 text-center">📊 Statistik Pengunjung</h3>
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div class="p-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg">
                                <div class="text-3xl font-bold text-primary-blue mb-2">{{ number_format($visitorStats['today']['visitors']) }}</div>
                                <div class="text-gray-600 text-sm">Pengunjung Hari Ini</div>
                                <div class="text-xs text-gray-500 mt-1">{{ number_format($visitorStats['today']['page_views']) }} halaman</div>
                            </div>
                            <div class="p-4 bg-gradient-to-r from-orange-50 to-orange-100 rounded-lg">
                                <div class="text-3xl font-bold text-primary-orange mb-2">{{ number_format($visitorStats['this_week']['visitors']) }}</div>
                                <div class="text-gray-600 text-sm">Pengunjung Minggu Ini</div>
                                <div class="text-xs text-gray-500 mt-1">{{ number_format($visitorStats['this_week']['page_views']) }} halaman</div>
                            </div>
                            <div class="p-4 bg-gradient-to-r from-green-50 to-green-100 rounded-lg">
                                <div class="text-3xl font-bold text-green-600 mb-2">{{ number_format($visitorStats['this_month']['visitors']) }}</div>
                                <div class="text-gray-600 text-sm">Pengunjung Bulan Ini</div>
                                <div class="text-xs text-gray-500 mt-1">{{ number_format($visitorStats['this_month']['page_views']) }} halaman</div>
                            </div>
                            <div class="p-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-lg">
                                <div class="text-3xl font-bold text-purple-600 mb-2">{{ number_format($visitorStats['total']['visitors']) }}</div>
                                <div class="text-gray-600 text-sm">Total Pengunjung</div>
                                <div class="text-xs text-gray-500 mt-1">{{ number_format($visitorStats['total']['page_views']) }} halaman</div>
                            </div>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-xs text-gray-500">
                                🕒 Terakhir diperbarui: {{ now()->setTimezone('Asia/Jakarta')->format('d M Y, H:i') }} WIB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Learning Journey Section -->
        <section id="perjalanan" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Perjalanan Belajar SAPA BIPA</h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Mulai dari <span class="">Tes Awal</span> sederhana hingga permainan interaktif, SAPA BIPA dirancang untuk membuat
                        pembelajaran bahasa Indonesia dan budaya lokal menjadi pengalaman yang menyenangkan dan bermakna.
                        Materi kami diadaptasi dari BIPA Daring Kementerian Pendidikan Dasar dan Menengah.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gradient-to-r from-primary-orange to-primary-blue text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-semibold  mb-4">Tes Awal</h3>
                        <p class="text-gray-100 leading-relaxed mb-4">
                            Mulai perjalanan Anda dengan Tes Awal sederhana untuk mengetahui kemampuan awal Anda dalam
                            bahasa Indonesia.
                        </p>
                        <p class="text-gray-100 leading-relaxed">
                            Tes ini membantu menyesuaikan materi pembelajaran dengan kebutuhan Anda, membuat pengalaman
                            belajar lebih personal.
                        </p>
                        <a href="#pretest" aria-label="Mulai Pre-Tes SAPA BIPA"
                           class="inline-block mt-6 bg-white text-primary-orange px-8 py-3 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                            Mulai <span class="">Tes Awal</span>
                        </a>
                    </div>
                    <div class="bg-gradient-to-r from-primary-blue to-primary-orange text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-semibold mb-4">Level 1 - Pemula</h3>
                        <p class="text-gray-100 leading-relaxed mb-4">
                            Untuk peserta yang baru mulai belajar bahasa Indonesia. Materi mencakup kosa kata dasar, salam,
                            angka, warna, pekerjaan, dan ungkapan sehari-hari.
                        </p>
                        <p class="text-gray-100 leading-relaxed">
                            Berisi 15 soal interaktif dengan desain visual menarik dan tantangan berbasis waktu untuk
                            meningkatkan motivasi belajar.
                        </p>
                    </div>
                    <div class="bg-gradient-to-r from-primary-orange to-primary-blue text-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-semibold mb-4">Level 2 - Lanjutan</h3>
                        <p class="text-gray-100 leading-relaxed mb-4">
                            Untuk peserta dengan kemampuan dasar yang ingin memperdalam bahasa dan budaya Indonesia.
                        </p>
                        <p class="text-gray-100 leading-relaxed">
                            Tantangan lebih kompleks dengan 15 soal interaktif yang mengasah keterampilan berbahasa dan
                            pemahaman budaya.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pretest Game Card Section -->
        <section id="pretest" class="py-20 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mulai dengan <span class="">Tes Awal</span></h2>
                    <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Uji kemampuan awal Anda dengan <span class="">Tes Awal</span> interaktif kami untuk menyesuaikan perjalanan belajar Anda.
                    </p>
                </div>
                @php
                   $pretestGame = App\Models\Game::where('level', 'LIKE', '%' . 'awal' . '%')->first();
                @endphp
                @if ($pretestGame)
                    <a href="/games/{{ $pretestGame->id }}/show"
                       aria-label="Mainkan {{ $pretestGame->title }}"
                       class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer max-w-4xl mx-auto">
                        <div class="h-48">
                            @if ($pretestGame->thumbnail_url)
                                <img src="{{ $pretestGame->thumbnail_url }}"
                                     alt="{{ $pretestGame->title }} thumbnail"
                                     class="w-full h-full object-cover">
                            @else
                                <div class="h-full bg-gradient-to-r from-primary-orange to-primary-blue flex items-center justify-center">
                                    <p class="text-white font-semibold">{{ $pretestGame->title }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-3">{{ $pretestGame->title }}</h3>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm bg-gray-100 text-gray-600 px-3 py-1 rounded">{{ $pretestGame->level }}</span>
                            </div>
                            <button class="w-full bg-gradient-to-r from-primary-orange to-primary-blue text-white py-3 rounded-lg font-medium hover:shadow-lg transition-all duration-300">
                                Mainkan Sekarang
                            </button>
                        </div>
                    </a>
                @else
                    <div class="bg-white rounded-xl shadow-lg p-8 text-center max-w-4xl mx-auto">
                        <p class="text-lg text-gray-600">Tes Awal belum tersedia. Silakan cek kembali nanti!</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- Navigation Section -->
        <section class="py-20 bg-gradient-to-r from-secondary-50 to-primary-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Jelajahi Lebih Banyak</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-8">
                    Lanjutkan perjalanan belajar Anda dengan artikel budaya dan kosa kata bahasa Indonesia.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/articles" aria-label="Lihat Artikel SAPA BIPA"
                       class="bg-primary-blue text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        Lihat Artikel
                    </a>
                    <a href="/vocabularies" aria-label="Lihat Kosa Kata SAPA BIPA"
                       class="bg-primary-orange text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        Lihat Kosa Kata
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
