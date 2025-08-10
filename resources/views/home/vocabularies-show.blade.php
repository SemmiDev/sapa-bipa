@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Back Navigation -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <button data-route="/kosakata"
                class="flex items-center text-primary-green hover:text-accent-yellow transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Back to Vocabulary
            </button>
        </div>

        <!-- Category Header -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-video bg-gradient-to-r from-primary-green to-accent-yellow relative">
                    <img src="https://images.pexels.com/photos/159711/books-bookstore-book-reading-159711.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Academic Vocabulary"
                        class="w-full h-full object-cover mix-blend-overlay">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-6xl mb-4">🎓</div>
                            <h1 class="text-3xl md:text-4xl font-bold">Academic Vocabulary</h1>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-body-mobile md:text-body-desktop text-gray-600 leading-relaxed">Essential words for
                        academic success</p>
                </div>
            </div>
        </div>

        <!-- Vocabulary Words -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300">
                    <div class="mb-4">
                        <h3 class="text-2xl font-bold text-primary-green mb-2">Analyze</h3>
                        <p class="text-gray-600 italic">/ˈæn.ə.laɪz/</p>
                    </div>
                    <p class="text-body-mobile md:text-body-desktop text-gray-700 mb-4 leading-relaxed">To examine something
                        in detail to understand it better</p>
                    <div class="bg-green-50 rounded-lg p-4">
                        <p class="text-sm text-gray-600 italic">Students need to analyze the data before drawing
                            conclusions.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300">
                    <div class="mb-4">
                        <h3 class="text-2xl font-bold text-primary-green mb-2">Analyze</h3>
                        <p class="text-gray-600 italic">/ˈæn.ə.laɪz/</p>
                    </div>
                    <p class="text-body-mobile md:text-body-desktop text-gray-700 mb-4 leading-relaxed">To examine something
                        in detail to understand it better</p>
                    <div class="bg-green-50 rounded-lg p-4">
                        <p class="text-sm text-gray-600 italic">Students need to analyze the data before drawing
                            conclusions.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tips Section -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="bg-gradient-to-r from-green-50 to-yellow-50 rounded-2xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">💡 Learning Tips</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-primary-green mb-3">Name Format Tips</h3>
                        <p class="text-sm text-gray-600 mb-2">When creating usernames or profiles, use this format:</p>
                        <code class="bg-gray-100 px-2 py-1 rounded text-sm">name_country_role</code>
                        <p class="text-xs text-gray-500 mt-2">Example: sarah_usa_student</p>
                    </div>
                    <div class="bg-white rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-primary-green mb-3">📸 Take Pictures</h3>
                        <p class="text-sm text-gray-600">Capture vocabulary in real life! Take photos of objects and label
                            them with new words you're learning.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-green-50 to-yellow-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Practice Your Vocabulary</h2>
                <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-8 leading-relaxed">
                    Test your knowledge with interactive games designed to reinforce these vocabulary words.
                </p>
                <a href="/games"
                    class="next-button bg-gradient-to-r from-primary-green to-accent-yellow text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Play Vocabulary Games →
                </a>
            </div>
        </section>
    </div>
@endsection
