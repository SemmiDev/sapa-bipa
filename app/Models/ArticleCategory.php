<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'thumbnail'];

    // Relasi: Satu kategori memiliki banyak artikel
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // Accessor untuk mendapatkan URL thumbnail
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? Storage::url($this->thumbnail) : null;
    }
}
