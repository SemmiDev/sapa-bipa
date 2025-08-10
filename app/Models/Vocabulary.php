<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Vocabulary extends Model
{
    use HasFactory;

    protected $fillable = ['vocabulary_category_id', 'word', 'meaning', 'example', 'thumbnail'];

    // Relasi: Kosa kata milik satu kategori
    public function vocabularyCategory()
    {
        return $this->belongsTo(VocabularyCategory::class);
    }

    // Accessor untuk mendapatkan URL thumbnail
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? Storage::url($this->thumbnail) : null;
    }
}
