@extends('layouts.dashboard')

@section('title', 'Edit Kosa Kata')

@section('content')
<div class="container mx-auto p-4 font-nunito">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">Edit Kosa Kata</h2>
            <p class="text-sm text-gray-600 mt-1">Perbarui informasi kosa kata.</p>
        </div>

        <div class="p-6">
            <form action="{{ route('dashboard.vocabularies.update', $vocabulary) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <div>
                        <label for="vocabulary_category_id" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="vocabulary_category_id" id="vocabulary_category_id"
                                class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('vocabulary_category_id') border-red-500 @enderror">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('vocabulary_category_id', $vocabulary->vocabulary_category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('vocabulary_category_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="word" class="block text-sm font-medium text-gray-700">Kata Dalam Bahasa Indonesia</label>
                        <input type="text" name="word" id="word" value="{{ old('word', $vocabulary->word) }}"
                               class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('word') border-red-500 @enderror"
                               placeholder="Masukkan kata">
                        @error('word')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="meaning" class="block text-sm font-medium text-gray-700">Kata Dalam Bahasa Inggris</label>
                        <input type="text" name="meaning" id="meaning" value="{{ old('meaning', $vocabulary->meaning) }}"
                               class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('meaning') border-red-500 @enderror"
                               placeholder="Masukkan arti kata">
                        @error('meaning')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="example" class="block text-sm font-medium text-gray-700">Contoh Penggunaan</label>
                        <textarea name="example" id="example" rows="4"
                                  class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('example') border-red-500 @enderror"
                                  placeholder="Masukkan contoh penggunaan (opsional)">{{ old('example', $vocabulary->example) }}</textarea>
                        @error('example')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                        @if ($vocabulary->thumbnail_url)
                            <img src="{{ $vocabulary->thumbnail_url }}" alt="{{ $vocabulary->word }}"
                                 class="mt-1 w-32 h-32 object-cover rounded-lg mb-2">
                        @endif
                        <input type="file" name="thumbnail" id="thumbnail"
                               class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-[#007A55] hover:file:bg-emerald-100">
                        @error('thumbnail')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('dashboard.vocabularies.index') }}"
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
