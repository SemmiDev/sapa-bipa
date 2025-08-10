<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $categories = ArticleCategory::latest()->paginate(10);
        return view('dashboard.article-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.article-categories.create');
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

        ArticleCategory::create($validated);

        return redirect()->route('dashboard.articles-categories.index')
            ->with('success', 'Kategori artikel berhasil dibuat.');
    }

    public function show(ArticleCategory $articleCategory)
    {
        return view('dashboard.article-categories.show', compact('articleCategory'));
    }

    public function edit(ArticleCategory $articleCategory)
    {
        return view('dashboard.article-categories.edit', compact('articleCategory'));
    }

    public function update(Request $request, ArticleCategory $articleCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama jika ada
            if ($articleCategory->thumbnail) {
                Storage::disk('public')->delete($articleCategory->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $articleCategory->update($validated);

        return redirect()->route('dashboard.articles-categories.index')
            ->with('success', 'Kategori artikel berhasil diperbarui.');
    }

    public function destroy(ArticleCategory $articleCategory)
    {
        if ($articleCategory->thumbnail) {
            Storage::disk('public')->delete($articleCategory->thumbnail);
        }

        $articleCategory->delete();

        return redirect()->route('dashboard.articles-categories.index')
            ->with('success', 'Kategori artikel berhasil dihapus.');
    }
}
