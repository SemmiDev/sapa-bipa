@extends('layouts.home')

@section('title', 'SAPA BIPA - Berikan Feedback')

@section('content')
    <div class="min-h-screen py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    💬 Berikan Ulasan
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Bantu kami meningkatkan SAPA BIPA dengan memberikan saran, kritik, atau masukan Anda
                </p>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <!-- Feedback Form -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="p-4 bg-gradient-to-r from-primary-blue to-primary-orange">
                    <h2 class="text-xl font-semibold text-white">📝 Isian Ulasan</h2>
                </div>

                <div class="p-6 md:p-8">
                    <form action="{{ route('feedback.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama (Opsional)
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Masukkan nama Anda atau kosongkan untuk anonim"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-colors duration-200">
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Description Field -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                                Ulasan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="description" name="description" rows="6" required
                                placeholder="Berikan saran, kritik, atau masukan Anda tentang SAPA BIPA di sini..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-colors duration-200 resize-vertical">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-2 text-sm text-gray-500">Maksimal 1000 karakter</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-4">
                            <button type="submit"
                                class="flex-1 bg-gradient-to-r from-primary-blue to-primary-orange text-white py-3 px-6 rounded-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                    </svg>
                                    Kirim Ulasan
                                </span>
                            </button>

                            <a href="{{ route('feedback.index') }}"
                                class="flex-1 bg-gray-100 text-gray-700 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-200 text-center">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-3.582 8-8 8a8.959 8.959 0 01-4.906-1.456L3 21l2.456-5.094A8.959 8.959 0 013 12c0-4.418 3.582-8 8-8s8 3.582 8 8z"/>
                                    </svg>
                                    Lihat Ulasan Lainnya
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Info Section -->
            <div class="mt-8 bg-gradient-to-r from-primary-50 to-secondary-50 rounded-2xl p-6">
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">💡 Tips Ulasan yang Baik</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                        <div class="flex items-start">
                            <svg class="w-4 h-4 text-primary-blue mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Berikan ulasan yang spesifik dan konstruktif
                        </div>
                        <div class="flex items-start">
                            <svg class="w-4 h-4 text-primary-blue mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Ceritakan pengalaman Anda menggunakan platform
                        </div>
                        <div class="flex items-start">
                            <svg class="w-4 h-4 text-primary-blue mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Saran fitur baru atau peningkatan sangat dihargai
                        </div>
                        <div class="flex items-start">
                            <svg class="w-4 h-4 text-primary-blue mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Laporkan bug atau masalah teknis yang ditemukan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
