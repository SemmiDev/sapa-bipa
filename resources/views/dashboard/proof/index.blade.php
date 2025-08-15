@extends('layouts.dashboard')
@section('title', 'Galeri Bukti')

@push('styles')
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    @keyframes shimmer {
        0% {
            background-position: -200px 0;
        }
        100% {
            background-position: calc(200px + 100%) 0;
        }
    }

    .fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .gallery-item {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-item.loaded {
        opacity: 1;
        transform: translateY(0);
    }

    .gallery-item:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .gallery-item:hover .overlay {
        opacity: 1;
    }

    .gallery-item:hover .zoom-icon {
        transform: scale(1.2);
    }

    .overlay {
        opacity: 0;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, rgba(0, 122, 85, 0.8) 0%, rgba(0, 95, 66, 0.9) 100%);
    }

    .zoom-icon {
        transition: transform 0.3s ease;
    }

    .skeleton {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200px 100%;
        animation: shimmer 1.5s infinite;
    }

    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        background: #f8fafc;
    }

    .image-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        transition: left 0.5s;
        z-index: 1;
    }

    .gallery-item:hover .image-container::before {
        left: 100%;
    }

    .floating-animation {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Custom scrollbar for better aesthetics */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb {
        background: #007A55;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #005f42;
    }
</style>
@endpush

@section('content')
<div class="container mx-auto p-4 font-nunito">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden backdrop-blur-sm bg-opacity-95">
      <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Foto Pengguna</h2>
            </div>
        </div>


        <div class="p-6">
            @if (session('success'))
                <div class="mb-6 p-4 bg-gradient-to-r from-emerald-50 to-green-50 text-[#007A55] rounded-xl border border-emerald-200 fade-in-up">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <!-- Image Counter -->
            <div class="mb-6">
                <div class="text-gray-600">
                    @php
                        $files = Storage::disk('public')->files('proof-images');
                        $fileCount = count($files);
                    @endphp
                    <span class="text-sm">Total: <span class="font-semibold text-[#007A55]">{{ $fileCount }}</span> gambar</span>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($files as $index => $file)
                    <div class="gallery-item group" style="animation-delay: {{ $index * 0.1 }}s">
                        <div class="image-container relative bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl overflow-hidden shadow-lg group-hover:shadow-2xl transition-all duration-300">
                            <!-- Image -->
                            <div class="aspect-square">
                                <img
                                    src="{{ Storage::url($file) }}"
                                    alt="Bukti {{ $index + 1 }}"
                                    class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-110"
                                    loading="lazy"
                                    onload="this.parentElement.parentElement.classList.add('loaded')"
                                >
                            </div>

                            <!-- Overlay with actions -->
                            <div class="overlay absolute inset-0 flex items-center justify-center space-x-3">
                                <button onclick="openModal('{{ Storage::url($file) }}', '{{ basename($file) }}')"
                                        class="zoom-icon bg-white bg-opacity-90 p-3 rounded-full shadow-lg hover:bg-opacity-100 transition-all duration-200">
                                    <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                    </svg>
                                </button>
                                <a href="{{ Storage::url($file) }}"
                                   download
                                   class="zoom-icon bg-white bg-opacity-90 p-3 rounded-full shadow-lg hover:bg-opacity-100 transition-all duration-200">
                                    <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Loading skeleton -->
                            <div class="skeleton absolute inset-0 rounded-xl" style="display: none;"></div>
                        </div>

                        <!-- Image info -->
                        <div class="mt-3 text-center">
                            <p class="text-xs text-gray-500 truncate">{{ basename($file) }}</p>
                            <div class="mt-1 h-1 bg-gradient-to-r from-[#007A55] to-[#005f42] rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="text-center py-16">
                            <div class="floating-animation mb-4">
                                <svg class="w-16 h-16 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <p class="text-gray-500 text-lg font-medium mb-2">Belum ada bukti yang diunggah</p>
                            <p class="text-gray-400 text-sm">Upload beberapa gambar untuk melihat galeri yang menawan</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<!-- Modal for image preview -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="relative max-w-4xl max-h-screen m-4">
        <button onclick="closeModal()" class="absolute -top-4 -right-4 bg-white rounded-full p-2 shadow-lg hover:bg-gray-100 transition-colors duration-200 z-10">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl">
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-75 text-white px-4 py-2 rounded-full">
            <p id="modalTitle" class="text-sm font-medium"></p>
        </div>
    </div>
</div>

<script>
// Initialize animations when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Add loaded class to trigger animations
    const items = document.querySelectorAll('.gallery-item');
    items.forEach((item, index) => {
        setTimeout(() => {
            item.classList.add('loaded');
        }, index * 100);
    });
});

// Modal functions
function openModal(imageSrc, imageTitle) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');

    modalImage.src = imageSrc;
    modalTitle.textContent = imageTitle;
    modal.classList.remove('hidden');

    // Add fade in animation
    modal.style.opacity = '0';
    setTimeout(() => {
        modal.style.opacity = '1';
    }, 10);
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.opacity = '0';
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

// Close modal when clicking outside
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Add smooth scrolling
document.documentElement.style.scrollBehavior = 'smooth';
</script>
@endsection
