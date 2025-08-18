@extends('layouts.home')

@section('title', 'SAPA BIPA - Feedback dari Pengguna')

@section('content')
    <div class="min-h-screen py-12 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    💬 Ulasan dari Pengguna
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    Lihat apa yang dikatakan pengguna tentang SAPA BIPA
                </p>

                <a href="{{ route('feedback.create') }}"
                    class="inline-flex items-center bg-gradient-to-r from-primary-blue to-primary-orange text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Berikan Ulasan Baru
                </a>
            </div>

            @if($feedbacks->count() > 0)
                <!-- Feedback List -->
                <div class="space-y-6 mb-8">
                    @foreach($feedbacks as $feedback)
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="p-6">
                                <!-- Header -->
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center">
                                        <div class="w-12 h-12 bg-gradient-to-r from-primary-blue to-primary-orange rounded-full flex items-center justify-center text-white font-semibold text-lg">
                                            {{ substr($feedback->name ?? 'A', 0, 1) }}
                                        </div>
                                        <div class="ml-4">
                                            <h3 class="font-semibold text-gray-900">
                                                {{ $feedback->name ?? 'Anonim' }}
                                            </h3>
                                            <p class="text-sm text-gray-500">
                                                {{ $feedback->created_at_for_humans }}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Date Badge -->
                                    <span class="bg-gradient-to-r from-primary-50 to-secondary-50 text-primary-blue text-xs px-3 py-1 rounded-full font-medium">
                                        {{ $feedback->formatted_date }}
                                    </span>
                                </div>

                                <!-- Feedback Content -->
                                <div class="ml-16">
                                    <div class="bg-gray-50 rounded-lg p-4 relative">
                                        <div class="absolute -left-2 top-4 w-0 h-0 border-t-8 border-r-8 border-b-8 border-l-0 border-t-transparent border-r-gray-50 border-b-transparent"></div>
                                        <p class="text-gray-700 leading-relaxed">
                                            {{ $feedback->description }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="mt-4 ml-16 flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $feedback->formatted_time }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($feedbacks->hasPages())
                    <div class="flex justify-center items-center space-x-4">
                        @if($feedbacks->previousPageUrl())
                            <a href="{{ $feedbacks->previousPageUrl() }}" 
                               class="inline-flex items-center bg-white hover:bg-gray-50 text-gray-700 px-4 py-2 rounded-lg shadow border border-gray-200 font-medium transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                                Sebelumnya
                            </a>
                        @endif

                        <span class="bg-white text-gray-600 px-4 py-2 rounded-lg shadow border border-gray-200 text-sm">
                            Halaman {{ $feedbacks->currentPage() }} dari {{ $feedbacks->lastPage() }}
                        </span>

                        @if($feedbacks->nextPageUrl())
                            <a href="{{ $feedbacks->nextPageUrl() }}" 
                               class="inline-flex items-center bg-gradient-to-r from-primary-blue to-primary-orange hover:shadow-lg text-white px-4 py-2 rounded-lg font-medium transition-all duration-200 transform hover:scale-105">
                                Selanjutnya
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        @endif
                    </div>
                @endif

            @else
                <!-- No Feedback -->
                <div class="text-center py-16">
                    <div class="bg-white rounded-2xl shadow-lg p-12">
                        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-3.582 8-8 8a8.959 8.959 0 01-4.906-1.456L3 21l2.456-5.094A8.959 8.959 0 013 12c0-4.418 3.582-8 8-8s8 3.582 8 8z"/>
                        </svg>

                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Belum Ada Feedback</h3>
                        <p class="text-gray-600 mb-8">
                            Jadilah yang pertama memberikan feedback untuk membantu kami meningkatkan SAPA BIPA!
                        </p>

                        <a href="{{ route('feedback.create') }}"
                            class="inline-flex items-center bg-gradient-to-r from-primary-blue to-primary-orange text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Tulis Feedback Pertama
                        </a>
                    </div>
                </div>
            @endif

            <!-- Stats Section -->
            <div class="mt-12 bg-gradient-to-r from-primary-50 to-secondary-50 rounded-2xl p-6">
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">📊 Statistik Ulasan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-lg p-4">
                            <div class="text-2xl font-bold text-primary-blue">{{ $feedbacks->total() }}</div>
                            <div class="text-sm text-gray-600">Total Ulasan</div>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <div class="text-2xl font-bold text-primary-orange">{{ $feedbacks->where('name', '!=', 'Anonim')->count() }}</div>
                            <div class="text-sm text-gray-600">Ulasan Teridentifikasi</div>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <div class="text-2xl font-bold text-green-600">{{ \App\Models\Feedback::recent(7)->count() }}</div>
                            <div class="text-sm text-gray-600">Ulasan 7 Hari Terakhir</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
