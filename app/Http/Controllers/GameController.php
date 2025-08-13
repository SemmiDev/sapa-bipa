<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::latest()->paginate(100);
        return view('dashboard.games.index', compact('games'));
    }

    public function create()
    {
        return view('dashboard.games.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'level' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Game::create($validated);

        return redirect()->route('dashboard.games.index')
            ->with('success', 'Permainan berhasil dibuat.');
    }

    public function show(Game $game)
    {
        return view('dashboard.games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('dashboard.games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $validated = $request->validate([
            'level' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($game->thumbnail) {
                Storage::disk('public')->delete($game->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $game->update($validated);

        return redirect()->route('dashboard.games.index')
            ->with('success', 'Permainan berhasil diperbarui.');
    }

    public function destroy(Game $game)
    {
        if ($game->thumbnail) {
            Storage::disk('public')->delete($game->thumbnail);
        }

        $game->delete();

        return redirect()->route('dashboard.games.index')
            ->with('success', 'Permainan berhasil dihapus.');
    }
}
