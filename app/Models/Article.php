<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['article_category_id', 'title', 'content', 'thumbnail'];

    // Relasi: Artikel milik satu kategori
    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    // Accessor untuk mendapatkan URL thumbnail
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? Storage::url($this->thumbnail) : null;
    }

    // Accessor untuk menghitung estimasi waktu baca dalam menit
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $readingTime = ceil($wordCount / 200); // Asumsi 200 kata per menit
        return max(1, $readingTime); // Minimal 1 menit
    }
}
