@extends('layouts.dashboard')

@section('title', 'Kelola Kategori Kosa Kata')

@section('content')
<div class="container mx-auto p-4 font-nunito">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Kategori Kosa Kata</h2>
                <p class="text-sm text-gray-600 mt-1">Kelola kategori untuk kosa kata Anda.</p>
            </div>
            <a href="{{ route('dashboard.vocabularies-categories.create') }}"
               class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Tambah Kategori
            </a>
        </div>

        <div class="p-6">
            @if (session('success'))
                <div class="mb-4 p-4 bg-emerald-50 text-[#007A55] rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200" data-table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thumbnail</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($categories as $category)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $category->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($category->thumbnail_url)
                                        <img src="{{ $category->thumbnail_url }}" alt="{{ $category->name }}"
                                             class="w-16 h-16 object-cover rounded-lg">
                                    @else
                                        <span class="text-gray-500">Tidak ada thumbnail</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('dashboard.vocabularies-categories.show', $category) }}"
                                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat</a>
                                    <a href="{{ route('dashboard.vocabularies-categories.edit', $category) }}"
                                       class="ml-4 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Edit</a>
                                    <button type="button" data-modal-target="delete-modal-{{ $category->id }}"
                                            data-modal-toggle="delete-modal-{{ $category->id }}"
                                            class="ml-4 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                                </td>
                            </tr>

                            <!-- Modal Hapus -->
                            <div id="delete-modal-{{ $category->id }}" tabindex="-1"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow">
                                        <div class="p-4 text-center">
                                            <h3 class="mb-5 text-lg font-semibold text-gray-800">Hapus Kategori</h3>
                                            <p class="mb-5 text-sm text-gray-600">Apakah Anda yakin ingin menghapus kategori "{{ $category->name }}"?</p>
                                            <form action="{{ route('dashboard.vocabularies-categories.destroy', $category) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Hapus</button>
                                                <button type="button" data-modal-hide="delete-modal-{{ $category->id }}"
                                                        class="ml-2 bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300">Batal</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>


@endsection
