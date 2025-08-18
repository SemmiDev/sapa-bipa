<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'url',
        'method',
        'country',
        'city',
        'visited_at',
    ];

    protected $casts = [
        'visited_at' => 'datetime',
    ];

    /**
     * Get visitors for today
     */
    public static function today()
    {
        return static::whereDate('visited_at', Carbon::today());
    }

    /**
     * Get visitors for this week
     */
    public static function thisWeek()
    {
        return static::whereBetween('visited_at', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ]);
    }

    /**
     * Get visitors for this month
     */
    public static function thisMonth()
    {
        return static::whereMonth('visited_at', Carbon::now()->month)
                    ->whereYear('visited_at', Carbon::now()->year);
    }

    /**
     * Get visitors for this year
     */
    public static function thisYear()
    {
        return static::whereYear('visited_at', Carbon::now()->year);
    }

    /**
     * Get unique visitors (by IP) for today
     */
    public static function uniqueToday()
    {
        return static::today()->distinct('ip_address');
    }

    /**
     * Get unique visitors (by IP) for this week
     */
    public static function uniqueThisWeek()
    {
        return static::thisWeek()->distinct('ip_address');
    }

    /**
     * Get unique visitors (by IP) for this month
     */
    public static function uniqueThisMonth()
    {
        return static::thisMonth()->distinct('ip_address');
    }

    /**
     * Get unique visitors (by IP) for this year
     */
    public static function uniqueThisYear()
    {
        return static::thisYear()->distinct('ip_address');
    }

    /**
     * Get total unique visitors
     */
    public static function totalUnique()
    {
        return static::distinct('ip_address');
    }

    /**
     * Get page views for today
     */
    public static function pageViewsToday()
    {
        return static::today()->count();
    }

    /**
     * Get page views for this week
     */
    public static function pageViewsThisWeek()
    {
        return static::thisWeek()->count();
    }

    /**
     * Get page views for this month
     */
    public static function pageViewsThisMonth()
    {
        return static::thisMonth()->count();
    }

    /**
     * Get visitor statistics summary
     */
    public static function getStatistics()
    {
        return [
            'today' => [
                'visitors' => static::uniqueToday()->count(),
                'page_views' => static::pageViewsToday(),
            ],
            'this_week' => [
                'visitors' => static::uniqueThisWeek()->count(),
                'page_views' => static::pageViewsThisWeek(),
            ],
            'this_month' => [
                'visitors' => static::uniqueThisMonth()->count(),
                'page_views' => static::pageViewsThisMonth(),
            ],
            'total' => [
                'visitors' => static::totalUnique()->count(),
                'page_views' => static::count(),
            ],
        ];
    }
}
