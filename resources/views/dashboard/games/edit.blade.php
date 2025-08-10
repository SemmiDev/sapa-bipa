@extends('layouts.dashboard')

@section('title', 'Edit Permainan')

@section('content')
<div class="container mx-auto p-4 font-nunito">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">Edit Permainan</h2>
            <p class="text-sm text-gray-600 mt-1">Perbarui informasi permainan.</p>
        </div>

        <div class="p-6">
            <form action="{{ route('dashboard.games.update', $game) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <div>
                        <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                        <input type="text" name="level" id="level" value="{{ old('level', $game->level) }}"
                               class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('level') border-red-500 @enderror"
                               placeholder="Masukkan level permainan">
                        @error('level')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $game->title) }}"
                               class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('title') border-red-500 @enderror"
                               placeholder="Masukkan judul permainan">
                        @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="description" id="description" rows="4"
                                  class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('description') border-red-500 @enderror"
                                  placeholder="Masukkan deskripsi permainan (opsional)">{{ old('description', $game->description) }}</textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="code" class="block text-sm font-medium text-gray-700">Kode Permainan</label>
                        <input type="text" name="code" id="code" value="{{ old('code', $game->code) }}"
                               class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('code') border-red-500 @enderror"
                               placeholder="Masukkan kode permainan">
                        @error('code')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                        @if ($game->thumbnail_url)
                            <img src="{{ $game->thumbnail_url }}" alt="{{ $game->title }}"
                                 class="mt-1 w-32 h-32 object-cover rounded-lg mb-2">
                        @endif
                        <input type="file" name="thumbnail" id="thumbnail"
                               class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-[#007A55] hover:file:bg-emerald-100">
                        @error('thumbnail')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('dashboard.games.index') }}"
                           class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300">Batal</a>
                        <button type="submit"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
