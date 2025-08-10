@extends('layouts.dashboard')

@section('title', 'Kelola Permainan')

@section('content')
<div class="container mx-auto p-4 font-nunito">
    <div class="bg-white shadow-lg rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Permainan</h2>
                <p class="text-sm text-gray-600 mt-1">Kelola permainan Anda.</p>
            </div>
            <a href="{{ route('dashboard.games.create') }}"
               class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Tambah Permainan
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
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Level</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thumbnail</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($games as $game)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $game->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $game->level }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $game->code }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($game->thumbnail_url)
                                        <img src="{{ $game->thumbnail_url }}" alt="{{ $game->title }}"
                                             class="w-16 h-16 object-cover rounded-lg">
                                    @else
                                        <span class="text-gray-500">Tidak ada thumbnail</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('dashboard.games.show', $game) }}"
                                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat</a>
                                    <a href="{{ route('dashboard.games.edit', $game) }}"
                                       class="ml-4 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Edit</a>
                                    <button type="button" data-modal-target="delete-modal-{{ $game->id }}"
                                            data-modal-toggle="delete-modal-{{ $game->id }}"
                                            class="ml-4 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                                </td>
                            </tr>

                            <!-- Modal Hapus -->
                            <div id="delete-modal-{{ $game->id }}" tabindex="-1"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow">
                                        <div class="p-4 text-center">
                                            <h3 class="mb-5 text-lg font-semibold text-gray-800">Hapus Permainan</h3>
                                            <p class="mb-5 text-sm text-gray-600">Apakah Anda yakin ingin menghapus permainan "{{ $game->title }}"?</p>
                                            <form action="{{ route('dashboard.games.destroy', $game) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Hapus</button>
                                                <button type="button" data-modal-hide="delete-modal-{{ $game->id }}"
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
                {{ $games->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
