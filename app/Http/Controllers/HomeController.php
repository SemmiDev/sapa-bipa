<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view("home.home");
    }

    public function articles() {
        return view("home.articles");
    }

    public function articleShow() {
        return view("home.articles-show");
    }
    public function gameShow() {
        return view("home.games-show");
    }

    public function vocabularies() {
        return view("home.vocabularies");
    }

    public function vocabularyShow() {
        return view("home.vocabularies-show");
    }

    public function games() {
        return view("home.games");
    }
}
