@extends('layouts.dashboard')

@section('title', 'Detail Kosa Kata')

@section('content')
<div class="container mx-auto p-4 font-nunito">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">Detail Kosa Kata</h2>
            <p class="text-sm text-gray-600 mt-1">Informasi tentang kosa kata.</p>
        </div>

        <div class="p-6">
            <div class="space-y-4">
                <div>
                    <h3 class="text-sm font-medium text-gray-700">Kata</h3>
                    <p class="mt-1 text-gray-900">{{ $vocabulary->word }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-700">Arti</h3>
                    <p class="mt-1 text-gray-900">{{ $vocabulary->meaning }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-700">Kategori</h3>
                    <p class="mt-1 text-gray-900">{{ $vocabulary->vocabularyCategory->name }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-700">Contoh Penggunaan</h3>
                    <p class="mt-1 text-gray-900">{{ $vocabulary->example ?? 'Tidak ada contoh' }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-700">Thumbnail</h3>
                    @if ($vocabulary->thumbnail_url)
                        <img src="{{ $vocabulary->thumbnail_url }}" alt="{{ $vocabulary->word }}"
                             class="mt-1 w-32 h-32 object-cover rounded-lg">
                    @else
                        <p class="mt-1 text-gray-500">Tidak ada thumbnail</p>
                    @endif
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('dashboard.vocabularies.index') }}"
                       class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
