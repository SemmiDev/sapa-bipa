@extends('layouts.app')

@section('title', 'Masuk Admin')

@section('content')
    <div
        class="min-h-screen flex items-center justify-center bg-white py-12 px-4 sm:px-6 lg:px-8 font-nunito">
        <div
            class="max-w-md w-full space-y-8 bg-white rounded-2xl shadow-2xl p-8 transform transition-all duration-300 hover:shadow-3xl">
            <!-- Header Section -->
            <div class="text-center">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 font-nunito">Selamat Datang</h2>
                    <p
                        class="mt-2 text-sm text-gray-500 italic flex items-center justify-center gap-2 font-nunito font-medium">
                        <svg class="w-5 h-5 text-[#154564]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11c0-1.657-1.343-3-3-3s-3 1.343-3 3 1.343 3 3 3 3-1.343 3-3zm0 0c0-1.657 1.343-3 3-3s3 1.343 3 3-1.343 3-3 3-3-1.343-3-3zm0 8v-4">
                            </path>
                        </svg>
                        Masuk ke <span class="font-semibold text-[#154564]">Panel Admin</span>
                    </p>
                </div>
            </div>

            <!-- Form Section -->
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <!-- Username Field -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 font-nunito">
                            Username Pengguna
                        </label>
                        <div class="relative mt-1">
                            <input id="username" name="username" type="text" required value="{{ old('username') }}"
                                class="block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#154564] focus:border-[#154564] transition-all duration-200 font-nunito @error('username') border-red-500 @enderror"
                                placeholder="Masukkan username Anda">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>
                        @error('username')
                            <p class="mt-2 text-sm text-red-600 animate-pulse font-nunito">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 font-nunito">
                            Kata Sandi
                        </label>
                        <div class="relative mt-1">
                            <input id="password" name="password" type="password" required
                                class="block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#154564] focus:border-[#154564] transition-all duration-200 font-nunito @error('password') border-red-500 @enderror"
                                placeholder="Masukkan kata sandi Anda">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 2-4 2-4 2 2.896 2 4zm0 0c0 1.104.896 2 2 2s2-.896 2-2-2-4-2-4-2 2.896-2 4zM5 20h14v-2H5v2z" />
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 animate-pulse font-nunito">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox"
                                class="h-4 w-4 text-[#154564] focus:ring-[#154564] border-gray-300 rounded transition-all duration-200">
                            <label for="remember" class="ml-2 block text-sm text-gray-900 font-nunito">
                                Ingat saya
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-[#154564] hover:bg-[#154564] active:bg-[#154564] text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-[#154564] focus:ring-opacity-50 transform hover:-translate-y-1 font-nunito"
                            style="background-color: var(--[#154564]) !important; color: white !important;">
                            Masuk
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom CSS for Additional Styling -->
    @push('styles')
        <style>
            :root {
                --primary-50: #154564;
                --primary-500: #154564;
                --primary-600: #154564;
                --primary-700: #154564;
            }
        </style>
    @endpush
@endsection
