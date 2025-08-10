@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-r from-primary-orange via-orange-400 to-primary-green py-20">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="animate-fade-in-up">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        Welcome to <span class="text-yellow-200">SAPA BAPA</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-white mb-8 max-w-3xl mx-auto leading-relaxed">
                        Making learning fun, interactive, and accessible for everyone through innovative educational games
                        and content.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button data-next="${nextRoute}"
                            class="next-button bg-white text-primary-orange px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                            Start Learning →
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">About SAPA BAPA</h2>
                    <p class="text-body-mobile md:text-body-desktop text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        We're passionate about transforming education through technology, creating engaging experiences that
                        make learning enjoyable and effective.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-r from-accent-blue to-accent-purple rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Quality Content</h3>
                        <p class="text-gray-600 leading-relaxed">Carefully crafted educational materials designed by experts
                            in pedagogy and subject matter.</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-r from-primary-green to-accent-yellow rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Interactive Learning</h3>
                        <p class="text-gray-600 leading-relaxed">Engaging games and activities that promote active learning
                            and knowledge retention.</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-r from-accent-pink to-primary-orange rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Adaptive Platform</h3>
                        <p class="text-gray-600 leading-relaxed">Responsive design that works seamlessly across all devices
                            and learning environments.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="py-20 bg-gradient-to-r from-green-50 to-orange-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mission</h2>
                        <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-6 leading-relaxed">
                            To democratize quality education by creating innovative, accessible, and engaging learning
                            experiences that inspire curiosity and foster lifelong learning habits.
                        </p>
                        <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-8 leading-relaxed">
                            We believe that learning should be fun, interactive, and tailored to individual needs. Our
                            platform combines the latest in educational technology with proven pedagogical methods.
                        </p>
                        <button data-next="${nextRoute}"
                            class="next-button bg-gradient-to-r from-primary-orange to-primary-green text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                            Explore Our Content →
                        </button>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-xl">
                        <div class="grid grid-cols-2 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-primary-orange mb-2">10K+</div>
                                <div class="text-gray-600">Active Learners</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-primary-green mb-2">500+</div>
                                <div class="text-gray-600">Learning Materials</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-accent-blue mb-2">50+</div>
                                <div class="text-gray-600">Interactive Games</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-accent-purple mb-2">95%</div>
                                <div class="text-gray-600">Satisfaction Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
