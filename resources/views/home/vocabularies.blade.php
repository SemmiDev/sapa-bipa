@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Page Header -->
        <section class="relative bg-gradient-to-r from-primary-blue to-primary-orange py-16 overflow-hidden">
            <div class="absolute inset-0 bg-[url('/images/batik-pattern.png')] bg-cover bg-center opacity-10"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
                    Kosakata
                </h1>
                <p class="text-lg md:text-xl text-white max-w-3xl mx-auto leading-relaxed mb-8">
                    Laman ini membantu penutur asing pemula menyiapkan bekal kosakata dan pola kalimat sederhana sebelum
                    memainkan permainan digital SAPA BIPA.
                </p>
                <p class="text-base md:text-lg text-secondary-100 italic max-w-3xl mx-auto leading-relaxed mb-8">
                    Catatan: Kosakata disajikan dalam bahasa Indonesia dengan terjemahan Inggris di bawahnya untuk
                    memudahkan pemahaman cepat.
                </p>
            </div>
        </section>

        <!-- Vocabulary Categories -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    @foreach ($vocabularies as $category)
                        <a href="/vocabularies/{{ $category->id }}/show"
                            class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer"
                            aria-label="Lihat kosa kata {{ $category->name }}">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full overflow-hidden">
                                @if ($category->thumbnail_url)
                                    <img src="{{ $category->thumbnail_url }}" alt="{{ $category->name }} thumbnail"
                                        class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gradient-to-r from-primary-blue to-primary-orange"></div>
                                @endif
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $category->name }}</h3>
                            <p class="text-sm text-gray-600">{{ $category->vocabularies->count() }}
                                {{ $category->vocabularies->count() == 1 ? 'Kosakata' : 'Kosakata' }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

           <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="bg-gradient-to-r from-primary-50 to-secondary-50 rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center animate-fade-in-up">💡 Trik Belajar</h2>
                <div class="bg-white rounded-lg p-6">
                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-2">
                        <li>Ucapkan kata dengan suara keras 2–3 kali untuk mengingat bunyi dan arti.</li>
                        <li>Kelompokkan kosakata berdasarkan tema (warna, keluarga, pekerjaan) saat menghafal.</li>
                        <li>Latih pola kalimat sederhana: Subjek + Predikat + Objek/Keterangan. Contoh: Saya makan nasi.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bagian Selanjutnya -->
        <section class="py-16 bg-gradient-to-r from-primary-50 to-secondary-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Uji Pengetahuan Anda</h2>
                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                    Terapkan kosa kata baru Anda melalui permainan interaktif yang membuat proses belajar menyenangkan dan
                    mudah diingat.
                </p>
                <a href="/games"
                    class="next-button bg-gradient-to-r from-primary-blue to-primary-orange text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Mainkan Permainan Kosa Kata →
                </a>
            </div>
        </section>
    </div>
@endsection
