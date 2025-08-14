@extends('layouts.dashboard')

@section('title', 'Tambah Permainan')

@section('content')
    <div class="container mx-auto p-4 font-nunito">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Tambah Permainan</h2>
                <p class="text-sm text-gray-600 mt-1">Buat permainan baru.</p>
            </div>

            <div class="p-6">
                <form action="{{ route('dashboard.games.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label for="level" class="block text-sm font-medium text-gray-700">Level</label>
                            <input type="text" name="level" id="level" value="{{ old('level') }}"
                                class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500 @error('level') border-red-500 @enderror"
                                placeholder="Masukkan level permainan">
                            @error('level')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500 @error('title') border-red-500 @enderror"
                                placeholder="Masukkan judul permainan">
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <div id="quillEditor"></div>
                            <textarea name="description" id="editor" hidden></textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="code" class="block text-sm font-medium text-gray-700">Kode Permainan</label>
                            <input type="text" name="code" id="code" value="{{ old('code') }}"
                                class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500 @error('code') border-red-500 @enderror"
                                placeholder="Masukkan kode permainan">
                            @error('code')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
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


@push('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill-better-table@1.2.10/dist/quill-better-table.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill-better-table@1.2.10/dist/quill-better-table.min.js"></script>

   <script>
    // Inisialisasi Quill
    var quill = new Quill('#quillEditor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, false] }],
                [{ 'size': ['small', false, 'large', 'huge'] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['blockquote', 'code-block'],
                ['link'],
                ['clean']
            ],
            keyboard: {
                bindings: quillBetterTable.keyboardBindings
            }
        },
        placeholder: 'Masukkan deskripsi permainan...',
    });

    // Ambil konten lama dari textarea
    let editor = document.querySelector('#editor');
    let oldContent = editor.value;

    // Jika ada konten lama, set ke Quill
    if (oldContent.trim() !== '') {
        quill.root.innerHTML = oldContent;
    }

    // Sinkronkan konten Quill ke textarea setiap kali ada perubahan
    quill.on('text-change', function() {
        editor.value = quill.root.innerHTML;
    });

    // Pastikan konten tersinkronisasi saat form akan disubmit
    document.getElementById('gameForm').addEventListener('submit', function(e) {
        // Update textarea dengan konten terbaru dari Quill
        editor.value = quill.root.innerHTML;
    });
</script>

@endpush
