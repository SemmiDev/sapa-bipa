@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Page Header -->
        <section class="bg-gradient-to-r from-accent-blue to-accent-purple py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Educational Articles</h1>
                <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed">
                    Discover comprehensive articles designed to enhance your understanding and broaden your knowledge across
                    various subjects.
                </p>
            </div>
        </section>

        <!-- Articles Grid -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <a href="/articles/1/show" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                        <div class="h-48 bg-gradient-to-r from-accent-blue to-accent-purple flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                </svg>
                                <p class="font-semibold">Education</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">The Science of Learning</h3>
                            <p class="text-gray-600 text-sm mb-4">Explore comprehensive insights and practical knowledge that will enhance your understanding...</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">5 min read</span>
                                <span
                                    class="text-primary-orange font-medium hover:text-primary-green transition-colors duration-200">Read More →</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-blue-50 to-purple-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Ready for Games?</h2>
                <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-8 leading-relaxed">
                    Continue your learning journey with our interactive games that reinforce the concepts you've explored in
                    these articles.
                </p>
                <button data-next="${nextRoute}"
                    class="next-button bg-gradient-to-r from-accent-blue to-accent-purple text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Play Games Now →
                </button>
            </div>
        </section>
    </div>
@endsection
