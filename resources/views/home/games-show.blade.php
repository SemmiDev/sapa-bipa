@extends('layouts.home')

@section('title', 'SAPA BIPA - ' . $game->title)

@section('content')
    <div class="min-h-screen py-12 bg-gray-100">
        <!-- Back Navigation -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <a href="/games" aria-label="Kembali ke Halaman Permainan"
               class="flex items-center text-indigo-600 hover:text-orange-400 transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                          clip-rule="evenodd" />
                </svg>
                Kembali ke Permainan
            </a>
        </div>

        <!-- Game Thumbnail -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-video relative">
                    @if ($game->thumbnail_url)
                        <img src="{{ $game->thumbnail_url }}"
                             alt="{{ $game->title }} thumbnail"
                             class="w-full h-full object-cover">
                    @else
                        <div class="h-full bg-gradient-to-r from-indigo-600 to-orange-400"></div>
                    @endif
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white bg-black/40 p-5 rounded">
                            <h1 class="text-3xl md:text-4xl font-bold mb-4 animate-fade-in-up">{{ $game->title }}</h1>
                            <div class="flex flex-wrap justify-center gap-4">
                                <span class="bg-white px-3 py-1 rounded-full text-sm text-black">Kuis</span>
                                <span class="bg-white px-3 py-1 rounded-full text-sm text-black">{{ $game->level }}</span>
                                <span class="bg-white px-3 py-1 rounded-full text-sm text-black">1-8 pemain</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Game Description -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Permainan Ini</h2>
                <div class="text-sm mb-6 game-content">
                    <div class="">
                        {!! $game->description ?? '<p>Uji pengetahuan Anda tentang Bahasa Indonesia dan budaya lokal melalui platform kuis kami yang menarik.</p>' !!}

                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3">Fitur</h3>
                <ul class="prose text-sm space-y-2 mb-6">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                        Beragam kategori
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                        Papan peringkat
                    </li>
                </ul>
                <div class="bg-gradient-to-r from-indigo-50 to-orange-50 rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">🎮 Kode Permainan</h3>
                    <code class="bg-white px-3 py-2 rounded text-lg font-mono text-indigo-600">{{ $game->code ?? 'QUIZ2025' }}</code>
                    <p class="text-xs text-gray-500 mt-2">Gunakan kode ini untuk bergabung, atau bisa langsung main dibawah ini.</p>
                </div>
            </div>
        </div>

        <!-- Tips and Upload Proof -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 bg-gradient-to-r from-indigo-50 to-orange-50">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">📸 Tips</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Ambil tangkapan layar skor terbaik Anda</li>
                            <li>• Bagikan kemajuan Anda dengan teman</li>
                            <li>• Gunakan format nama: Nama_Negara_Peran untuk nama pengguna, contohnya <span class="font-bold">Mia_Indonesia_Mahasiswa</span></li>
                            <li>• Setelah memasukkan nama di kolom nickname, Langsung klik Log in untuk mulai bermain</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">📷 Unggah Bukti</h3>
                        <form action="/submit-proof" method="POST" enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            <div>
                                <label for="proof-image" class="block text-sm font-medium text-gray-700 mb-1">
                                    Ambil foto anda dari kamera atau unggah gambar
                                </label>
                                <input type="file" id="proof-image" name="proof-image" accept="image/*" capture="user"
                                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100">
                            </div>
                            <button type="submit"
                                    class="w-full bg-gradient-to-r from-indigo-600 to-orange-400 text-white py-2 rounded-lg font-medium hover:shadow-lg transition-all duration-300">
                                Kirim Bukti
                            </button>
                        </form>
                        <p class="text-xs text-gray-500 mt-2">* Tidak wajib, hanya untuk berbagi keseruan bermain.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Game Embed -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-4 bg-gradient-to-r from-indigo-600 to-orange-400">
                    <h3 class="text-lg font-semibold text-white">🎯 Mainkan Sekarang</h3>
                </div>
                <div class="p-4 bg-indigo-50">
                    <p class="text-sm text-gray-700 mb-4 text-center">
                        Jika ukuran frame terlalu kecil,
                        <a href="{{ 'https://game.educaplay.com/' . $game->code }}" target="_blank"
                           aria-label="Buka permainan {{ $game->title }} di jendela baru"
                           class="text-indigo-600 hover:text-orange-400 font-medium underline">
                            klik di sini untuk mulai bermain di jendela baru
                        </a>
                    </p>
                </div>
                <div class="relative" style="padding-bottom: 56.25%;">
                    <iframe src="{{ 'https://game.educaplay.com/' . $game->code }}"
                            class="absolute inset-0 w-full h-full border-0"
                            allowfullscreen
                            title="{{ $game->title }} - Permainan Edukasi"
                            loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-indigo-50 to-orange-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                    Selamat Bermain!
                </h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Siap melanjutkan perjalanan belajar Anda? Ayo jelajahi lebih banyak konten edukasi.
                </p>
                <a href="/" aria-label="Lanjutkan Belajar dengan SAPA BIPA"
                   class="next-button bg-gradient-to-r from-indigo-600 to-orange-400 text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Lanjutkan Belajar →
                </a>
            </div>
        </section>
    </div>
@endsection
