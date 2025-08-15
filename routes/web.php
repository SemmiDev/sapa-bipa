<?php

use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProofController;
use App\Http\Controllers\VocabularyCategoryController;
use App\Http\Controllers\VocabularyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/articles/{id}/show', [HomeController::class, 'articleShow'])->name('articles.show');

Route::get('/vocabularies', [HomeController::class, 'vocabularies'])->name('vocabularies');
Route::get('/vocabularies/{id}/show', [HomeController::class, 'vocabularyShow'])->name('vocabulary.show');

Route::get('/games', [HomeController::class, 'games'])->name('games');
Route::get('/games/{id}/show', [HomeController::class, 'gameShow'])->name('game.show');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profil', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profil', [ProfileController::class, 'update'])->name('profile.update');

Route::post('/submit-proof', [HomeController::class, 'submitProof'])->name('submit-proof');


Route::prefix('dashboard')->middleware('auth')->group(function () {
    // Dashboard Index
    Route::get("/", [DashboardController::class, "index"])->name('dashboard.index');

    // Article Categories
    Route::get('/articles-categories', [ArticleCategoryController::class, 'index'])->name('dashboard.articles-categories.index');
    Route::get('/articles-categories/create', [ArticleCategoryController::class, 'create'])->name('dashboard.articles-categories.create');
    Route::post('/articles-categories', [ArticleCategoryController::class, 'store'])->name('dashboard.articles-categories.store');
    Route::get('/articles-categories/{articleCategory}', [ArticleCategoryController::class, 'show'])->name('dashboard.articles-categories.show');
    Route::get('/articles-categories/{articleCategory}/edit', [ArticleCategoryController::class, 'edit'])->name('dashboard.articles-categories.edit');
    Route::put('/articles-categories/{articleCategory}', [ArticleCategoryController::class, 'update'])->name('dashboard.articles-categories.update');
    Route::delete('/articles-categories/{articleCategory}', [ArticleCategoryController::class, 'destroy'])->name('dashboard.articles-categories.destroy');

    // Articles
    Route::get('/articles', [ArticleController::class, 'index'])->name('dashboard.articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('dashboard.articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('dashboard.articles.store');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('dashboard.articles.show');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('dashboard.articles.edit');
    Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('dashboard.articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('dashboard.articles.destroy');

    // Vocabulary Categories
    Route::get('/vocabularies-categories', [VocabularyCategoryController::class, 'index'])->name('dashboard.vocabularies-categories.index');
    Route::get('/vocabularies-categories/create', [VocabularyCategoryController::class, 'create'])->name('dashboard.vocabularies-categories.create');
    Route::post('/vocabularies-categories', [VocabularyCategoryController::class, 'store'])->name('dashboard.vocabularies-categories.store');
    Route::get('/vocabularies-categories/{vocabularyCategory}', [VocabularyCategoryController::class, 'show'])->name('dashboard.vocabularies-categories.show');
    Route::get('/vocabularies-categories/{vocabularyCategory}/edit', [VocabularyCategoryController::class, 'edit'])->name('dashboard.vocabularies-categories.edit');
    Route::put('/vocabularies-categories/{vocabularyCategory}', [VocabularyCategoryController::class, 'update'])->name('dashboard.vocabularies-categories.update');
    Route::delete('/vocabularies-categories/{vocabularyCategory}', [VocabularyCategoryController::class, 'destroy'])->name('dashboard.vocabularies-categories.destroy');

    // Vocabularies
    Route::get('/vocabularies', [VocabularyController::class, 'index'])->name('dashboard.vocabularies.index');
    Route::get('/vocabularies/create', [VocabularyController::class, 'create'])->name('dashboard.vocabularies.create');
    Route::post('/vocabularies', [VocabularyController::class, 'store'])->name('dashboard.vocabularies.store');
    Route::get('/vocabularies/{vocabulary}', [VocabularyController::class, 'show'])->name('dashboard.vocabularies.show');
    Route::get('/vocabularies/{vocabulary}/edit', [VocabularyController::class, 'edit'])->name('dashboard.vocabularies.edit');
    Route::put('/vocabularies/{vocabulary}', [VocabularyController::class, 'update'])->name('dashboard.vocabularies.update');
    Route::delete('/vocabularies/{vocabulary}', [VocabularyController::class, 'destroy'])->name('dashboard.vocabularies.destroy');

    // Games
    Route::get('/games', [GameController::class, 'index'])->name('dashboard.games.index');
    Route::get('/games/create', [GameController::class, 'create'])->name('dashboard.games.create');
    Route::post('/games', [GameController::class, 'store'])->name('dashboard.games.store');
    Route::get('/games/{game}', [GameController::class, 'show'])->name('dashboard.games.show');
    Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('dashboard.games.edit');
    Route::put('/games/{game}', [GameController::class, 'update'])->name('dashboard.games.update');
    Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('dashboard.games.destroy');

    Route::get('/proof', [ProofController::class, 'index'])->name('dashboard.proof.index');
});
