<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Game;
use App\Models\VocabularyCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home.home");
    }

    public function articles()
    {
        $articles = Article::latest()->get();
        return view("home.articles", [
            'articles' => $articles,
        ]);
    }

    public function articleShow($id)
    {
        $article = Article::find($id);
        return view("home.articles-show", [
            "article" => $article
        ]);
    }

    public function gameShow($id)
    {
        $game = Game::findOrFail($id);
        return view("home.games-show", [
            "game" => $game
        ]);
    }

    public function vocabularies()
    {
        $vocabularies = VocabularyCategory::with('vocabularies')->get();
        return view("home.vocabularies", [
            "vocabularies" => $vocabularies
        ]);
    }

    public function vocabularyShow($id)
    {
        $category = VocabularyCategory::with('vocabularies')->findOrFail($id);
        return view("home.vocabularies-show", [
            "category" => $category
        ]);
    }

    public function games()
    {
        $games = Game::where('title', 'NOT LIKE', '%pre%')
            ->orderBy('level', 'asc')
            ->get();

        return view("home.games", [
            "games" => $games
        ]);
    }

     public function submitProof(Request $request)
    {
        if ($request->hasFile('proof-image')) {
            $request->file('proof-image')->store('proof-images', 'public');
        }
        return redirect()->back()->with('success', 'Foto berhasil di kirim.');
    }
}
