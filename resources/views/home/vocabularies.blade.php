@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Page Header -->
        <section class="bg-gradient-to-r from-primary-green to-accent-yellow py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Vocabulary Builder</h1>
                <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed">
                    Expand your vocabulary with our comprehensive collection of words, definitions, and usage examples
                    across multiple languages and subjects.
                </p>
            </div>
        </section>

        <!-- Vocabulary Categories -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <a href="/vocabularies/1/show" class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-accent-blue to-accent-purple rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🎓</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Academic</h3>
                        <p class="text-sm text-gray-600">200+ words</p>
                    </a>
                </div>

                <!-- Featured Vocabulary -->
                <div class="bg-gradient-to-r from-green-50 to-yellow-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Word of the Day</h3>
                    <div class="max-w-2xl mx-auto">
                        <div class="bg-white rounded-xl p-6 shadow-lg">
                            <div class="text-center mb-4">
                                <h4 class="text-3xl font-bold text-primary-green mb-2">Serendipity</h4>
                                <p class="text-gray-600 italic">noun | /ˌser.ənˈdɪp.ə.ti/</p>
                            </div>
                            <p class="text-body-mobile md:text-body-desktop text-gray-700 mb-4 leading-relaxed">
                                The occurrence and development of events by chance in a happy or beneficial way.
                            </p>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-sm text-gray-600 italic">
                                    "It was pure serendipity that led her to discover the hidden talent that would change
                                    her career."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-green-50 to-yellow-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Test Your Knowledge</h2>
                <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-8 leading-relaxed">
                    Put your expanded vocabulary to the test with our engaging games that make learning new words fun and
                    memorable.
                </p>
                <button data-next="${nextRoute}"
                    class="next-button bg-gradient-to-r from-primary-green to-accent-yellow text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Play Vocabulary Games →
                </button>
            </div>
        </section>
    </div>
@endsection
