@extends('layouts.home')

@section('title', 'SAPA BIPA')

@section('content')
    <div class="min-h-screen py-12">
        <!-- Back Navigation -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <button data-route="/artikel"
                class="flex items-center text-primary-orange hover:text-primary-green transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Back to Articles
            </button>
        </div>

        <!-- Article Header -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="aspect-video bg-gradient-to-r from-accent-blue to-accent-purple">
                    <img src="https://images.pexels.com/photos/256490/pexels-photo-256490.jpeg?auto=compress&cs=tinysrgb&w=800" alt="The Science of Learning" class="w-full h-full object-cover mix-blend-overlay">
                </div>
                <div class="p-8">
                    <div class="flex flex-wrap items-center gap-4 mb-4">
                        <span class="bg-accent-blue text-white px-3 py-1 rounded-full text-sm font-medium">Education</span>
                        <span class="text-gray-500 text-sm">5 min read</span>
                        <span class="text-gray-500 text-sm">January 15, 2025</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">The Science of Learning</h1>
                    <p class="text-gray-600 mb-4">By Dr. Sarah Johnson</p>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <p class="text-body-mobile md:text-body-desktop text-gray-700 mb-6 leading-relaxed">
                    Understanding how we learn is fundamental to improving educational outcomes. Recent neuroscience
                    research has revealed fascinating insights into the mechanisms of learning and memory formation.
                </p>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">The Brain's Learning Process</h3>
                <p class="text-body-mobile md:text-body-desktop text-gray-700 mb-6 leading-relaxed">
                    When we learn something new, our brain creates new neural pathways. This process, called
                    neuroplasticity, allows our brain to reorganize and adapt throughout our lives. The key factors that
                    enhance learning include:
                </p>
                <ul class="list-disc list-inside text-body-mobile md:text-body-desktop text-gray-700 mb-6 space-y-2">
                    <li>Active engagement with the material</li>
                    <li>Spaced repetition over time</li>
                    <li>Connecting new information to existing knowledge</li>
                    <li>Getting adequate sleep for memory consolidation</li>
                </ul>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Practical Applications</h3>
                <p class="text-body-mobile md:text-body-desktop text-gray-700 mb-6 leading-relaxed">
                    These scientific insights can be applied to create more effective learning strategies. Interactive
                    learning platforms, like educational games, leverage these principles to make learning more engaging and
                    memorable.
                </p>
            </div>
        </div>

        <!-- Next Section -->
        <section class="py-16 bg-gradient-to-r from-blue-50 to-purple-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Continue Learning</h2>
                <p class="text-body-mobile md:text-body-desktop text-gray-600 mb-8 leading-relaxed">
                    Ready to put this knowledge into practice? Explore our interactive games and activities.
                </p>
                <a href="/games"
                    class="next-button bg-gradient-to-r from-accent-blue to-accent-purple text-white px-10 py-4 rounded-full font-semibold text-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                    Continue to Games →
                </a>
            </div>
        </section>
    </div>
@endsection
