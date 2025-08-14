@extends('layouts.dashboard')

@section('title', 'Tambah Artikel')

@section('content')
    <div class="container mx-auto p-4 font-nunito">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Tambah Artikel</h2>
                <p class="text-sm text-gray-600 mt-1">Buat artikel baru.</p>
            </div>

            <div class="p-6">
                <form id="articleForm" action="{{ route('dashboard.articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label for="article_category_id"
                                class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select name="article_category_id" id="article_category_id"
                                class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('article_category_id') border-red-500 @enderror">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('article_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('article_category_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                class="mt-1 block w-full px-4 py-3 border border-gray-200 rounded-lg shadow-sm focus:ring-[#007A55] focus:border-[#007A55] @error('title') border-red-500 @enderror"
                                placeholder="Masukkan judul artikel">
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                            <div id="quillEditor"></div>
                            <textarea name="content" id="editor" hidden></textarea>
                            @error('content')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail"
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-[#007A55] hover:file:bg-emerald-100">
                            @error('thumbnail')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('dashboard.articles.index') }}"
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
        placeholder: 'Masukkan konten',
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
    document.getElementById('articleForm').addEventListener('submit', function(e) {
        // Update textarea dengan konten terbaru dari Quill
        editor.value = quill.root.innerHTML;
    });
</script>

@endpush
