<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Feedback extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Get created_at in WIB timezone
     */
    public function getCreatedAtWibAttribute(): Carbon
    {
        return Carbon::instance($this->created_at->setTimezone('Asia/Jakarta'));
    }

    /**
     * Get formatted created_at in WIB
     */
    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->created_at_wib->format('d M Y, H:i') . ' WIB';
    }

    /**
     * Get formatted created_at for humans in WIB
     */
    public function getCreatedAtForHumansAttribute(): string
    {
        return $this->created_at_wib->diffForHumans();
    }

    /**
     * Get formatted date only in WIB
     */
    public function getFormattedDateAttribute(): string
    {
        return $this->created_at_wib->format('d M Y');
    }

    /**
     * Get formatted time only in WIB
     */
    public function getFormattedTimeAttribute(): string
    {
        return $this->created_at_wib->format('H:i') . ' WIB';
    }

    /**
     * Scope for recent feedbacks
     */
    public function scopeRecent($query, $days = 30)
    {
        return $query->where('created_at', '>=', now()->subDays($days));
    }

    /**
     * Scope for ordering by latest
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
