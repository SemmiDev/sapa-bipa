@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Page Header -->
        <section class="bg-gradient-to-r from-accent-pink to-accent-purple py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Interactive Games</h1>
                <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed">
                    Learn through play with our collection of educational games designed to reinforce concepts and make
                    learning unforgettable.
                </p>
            </div>
        </section>

        <!-- Games Grid -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    <a href="/games/1/show" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                        <div class="h-40 bg-gradient-to-r from-accent-blue to-accent-purple flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
                                </svg>
                                <p class="font-semibold">Word Puzzle Master</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Word Puzzle Master</h3>
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-sm bg-gray-100 text-gray-600 px-2 py-1 rounded">Easy</span>
                                <span class="text-sm text-gray-500">1-100 players</span>
                            </div>
                            <button
                                class="w-full bg-gradient-to-r from-accent-blue to-accent-purple text-white py-2 rounded-lg font-medium hover:shadow-lg transition-all duration-300">
                                Play Now
                            </button>
                        </div>
                    </a>
                </div>

                <!-- Featured Game -->
                <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-2xl p-8">
                    <div class="max-w-4xl mx-auto">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div>
                                <h3 class="text-3xl font-bold text-gray-900 mb-4">Featured: Word Quest Adventure</h3>
                                <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-6 leading-relaxed">
                                    Embark on an epic journey where vocabulary knowledge is your greatest weapon. Solve
                                    puzzles, defeat challenges, and unlock new levels as you expand your word power.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <span
                                        class="bg-accent-pink text-white px-3 py-1 rounded-full text-sm font-medium">Adventure</span>
                                    <span
                                        class="bg-accent-purple text-white px-3 py-1 rounded-full text-sm font-medium">Vocabulary</span>
                                    <span
                                        class="bg-primary-green text-white px-3 py-1 rounded-full text-sm font-medium">Multiplayer</span>
                                </div>
                                <button
                                    class="bg-gradient-to-r from-accent-pink to-accent-purple text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    Play Now →
                                </button>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <div
                                    class="aspect-video bg-gradient-to-r from-accent-pink to-accent-purple rounded-lg flex items-center justify-center">
                                    <div class="text-white text-center">
                                        <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
                                        </svg>
                                        <p class="font-semibold">Interactive Preview</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-pink-50 to-purple-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Ready to Start Over?</h2>
                <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-8 leading-relaxed">
                    Great job completing your learning journey! Ready to explore more content and continue building your
                    knowledge?
                </p>
                <button data-next="${nextRoute}"
                    class="next-button bg-gradient-to-r from-accent-pink to-accent-purple text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Back to Home →
                </button>
            </div>
        </section>
    </div>
@endsection
