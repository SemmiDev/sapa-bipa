<?php

namespace App\Http\Controllers;

use App\Models\Vocabulary;
use App\Models\VocabularyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VocabularyController extends Controller
{
    public function index()
    {
        $vocabularies = Vocabulary::with('vocabularyCategory')->latest()->paginate(10);
        return view('dashboard.vocabularies.index', compact('vocabularies'));
    }

    public function create()
    {
        $categories = VocabularyCategory::all();
        return view('dashboard.vocabularies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'vocabulary_category_id' => 'required|exists:vocabulary_categories,id',
            'word' => 'required|string|max:255',
            'meaning' => 'required|string|max:255',
            'example' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Vocabulary::create($validated);

        return redirect()->route('dashboard.vocabularies.index')
            ->with('success', 'Kosa kata berhasil dibuat.');
    }

    public function show(Vocabulary $vocabulary)
    {
        return view('dashboard.vocabularies.show', compact('vocabulary'));
    }

    public function edit(Vocabulary $vocabulary)
    {
        $categories = VocabularyCategory::all();
        return view('dashboard.vocabularies.edit', compact('vocabulary', 'categories'));
    }

    public function update(Request $request, Vocabulary $vocabulary)
    {
        $validated = $request->validate([
            'vocabulary_category_id' => 'required|exists:vocabulary_categories,id',
            'word' => 'required|string|max:255',
            'meaning' => 'required|string|max:255',
            'example' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($vocabulary->thumbnail) {
                Storage::disk('public')->delete($vocabulary->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $vocabulary->update($validated);

        return redirect()->route('dashboard.vocabularies.index')
            ->with('success', 'Kosa kata berhasil diperbarui.');
    }

    public function destroy(Vocabulary $vocabulary)
    {
        if ($vocabulary->thumbnail) {
            Storage::disk('public')->delete($vocabulary->thumbnail);
        }

        $vocabulary->delete();

        return redirect()->route('dashboard.vocabularies.index')
            ->with('success', 'Kosa kata berhasil dihapus.');
    }
}
