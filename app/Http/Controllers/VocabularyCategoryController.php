<?php

namespace App\Http\Controllers;

use App\Models\VocabularyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VocabularyCategoryController extends Controller
{
    public function index()
    {
        $categories = VocabularyCategory::latest()->paginate(100);
        return view('dashboard.vocabularies-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.vocabularies-categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        VocabularyCategory::create($validated);

        return redirect()->route('dashboard.vocabularies-categories.index')
            ->with('success', 'Kategori kosa kata berhasil dibuat.');
    }

    public function show(VocabularyCategory $vocabularyCategory)
    {
        return view('dashboard.vocabularies-categories.show', compact('vocabularyCategory'));
    }

    public function edit(VocabularyCategory $vocabularyCategory)
    {
        return view('dashboard.vocabularies-categories.edit', compact('vocabularyCategory'));
    }

    public function update(Request $request, VocabularyCategory $vocabularyCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($vocabularyCategory->thumbnail) {
                Storage::disk('public')->delete($vocabularyCategory->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $vocabularyCategory->update($validated);

        return redirect()->route('dashboard.vocabularies-categories.index')
            ->with('success', 'Kategori kosa kata berhasil diperbarui.');
    }

    public function destroy(VocabularyCategory $vocabularyCategory)
    {
        if ($vocabularyCategory->thumbnail) {
            Storage::disk('public')->delete($vocabularyCategory->thumbnail);
        }

        $vocabularyCategory->delete();

        return redirect()->route('dashboard.vocabularies-categories.index')
            ->with('success', 'Kategori kosa kata berhasil dihapus.');
    }
}
