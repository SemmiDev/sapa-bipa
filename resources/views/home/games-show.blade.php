@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Back Navigation -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <button data-route="/games"
                class="flex items-center text-accent-pink hover:text-accent-purple transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Back to Games
            </button>
        </div>

        <!-- Game Header -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-video bg-gradient-to-r from-accent-pink to-accent-purple relative">
                    <img src="https://images.pexels.com/photos/5428836/pexels-photo-5428836.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Quiz Champion" class="w-full h-full object-cover mix-blend-overlay">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h1 class="text-3xl md:text-4xl font-bold mb-4">Quiz Champion</h1>
                            <div class="flex flex-wrap justify-center gap-4">
                                <span class="bg-white  px-3 py-1 rounded-full text-sm text-black">Trivia</span>
                                <span class="bg-white  px-3 py-1 rounded-full text-sm text-black">Medium</span>
                                <span class="bg-white  px-3 py-1 rounded-full text-sm text-black">1-8 players</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Game Info and Embed -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Game Info -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">About This Game</h2>
                        <p class="text-body-mobile md:text-body-desktop text-gray-700 mb-6 leading-relaxed">Test your
                            knowledge across multiple subjects with our comprehensive quiz platform.</p>

                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Features</h3>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-primary-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Multiple categories
                            </li>

                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-primary-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Leaderboards
                            </li>
                            <li class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 text-primary-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Team play
                            </li>
                        </ul>

                        <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-lg p-4 mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">🎮 Game Code</h3>
                            <code class="bg-white px-3 py-2 rounded text-lg font-mono text-accent-pink">QUIZ2025</code>
                            <p class="text-xs text-gray-500 mt-2">Use this code to join multiplayer sessions</p>
                        </div>

                        <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">📸 Tips</h3>
                            <ul class="text-sm text-gray-600 space-y-1">
                                <li>• Take screenshots of your high scores</li>
                                <li>• Share your progress with friends</li>
                                <li>• Use format: name_country_role for usernames</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Game Embed -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-4 bg-gradient-to-r from-accent-pink to-accent-purple">
                            <h3 class="text-lg font-semibold text-white">🎯 Play Now</h3>
                        </div>
                        <div class="aspect-video">
                            <iframe src="https://game.educaplay.com/062393" class="w-full h-full border-0" allowfullscreen
                                title="${game.title} - Educational Game" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-pink-50 to-purple-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Great Job Playing!</h2>
                <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-8 leading-relaxed">
                    Ready to continue your learning journey? Let's explore more educational content.
                </p>
                <button data-next="${nextRoute}"
                    class="next-button bg-gradient-to-r from-accent-pink to-accent-purple text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Continue Learning →
                </button>
            </div>
        </section>
    </div>
@endsection
