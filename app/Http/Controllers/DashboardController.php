<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Vocabulary;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'totalArtikel' => Article::count(),
            'totalVocabulary' => Vocabulary::count(),
        ]);
    }
}
