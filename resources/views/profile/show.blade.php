@extends('layouts.dashboard')

@section('title', 'Profil')

@section('content')
<div class="container mx-auto">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-800">Pengaturan Profil</h2>
            <p class="text-sm text-gray-600 mt-1">Perbarui informasi profil dan kata sandi Anda.</p>
        </div>

        <div class="p-6">
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf

                <!-- Nama Lengkap -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Lengkap
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $user->name) }}"
                        required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#fa6400] focus:border-[#fa6400] @error('name') border-red-500 @enderror"
                    >
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Username (readonly) -->
                <div class="mb-6">
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Pengguna
                    </label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        value="{{ $user->username }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#fa6400] focus:border-[#fa6400] @error('name') border-red-500 @enderror">
                </div>

                <!-- Kata Sandi Baru -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Kata Sandi Baru
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#fa6400] focus:border-[#fa6400] @error('password') border-red-500 @enderror"
                    >
                    <p class="mt-1 text-xs text-gray-500">Biarkan kosong jika tidak ingin mengubah kata sandi.</p>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Kata Sandi Baru -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                        Konfirmasi Kata Sandi Baru
                    </label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#fa6400] focus:border-[#fa6400]"
                    >
                </div>

                <!-- Informasi Penceramah (jika ada) -->

                <div class="flex items-center justify-end space-x-1">
                    <a href="{{ route('dashboard.index') }}"
                       class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300">
                        Batal
                    </a>
                    <button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Perbarui Profil
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
