<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Skip tracking for admin routes, API routes, and asset requests
        if ($this->shouldSkipTracking($request)) {
            return $next($request);
        }

        // Track the visitor
        $this->trackVisitor($request);

        return $next($request);
    }

    /**
     * Determine if tracking should be skipped for this request
     */
    private function shouldSkipTracking(Request $request): bool
    {
        $skipRoutes = [
            'dashboard/*',
            'api/*',
            '_debugbar/*',
        ];

        $skipExtensions = [
            '.css', '.js', '.png', '.jpg', '.jpeg', '.gif', '.ico', '.svg', '.woff', '.woff2', '.ttf'
        ];

        // Skip admin/dashboard routes
        foreach ($skipRoutes as $pattern) {
            if ($request->is($pattern)) {
                return true;
            }
        }

        // Skip asset requests
        foreach ($skipExtensions as $extension) {
            if (str_ends_with($request->path(), $extension)) {
                return true;
            }
        }

        // Skip AJAX requests (optional)
        if ($request->ajax()) {
            return false; // You can change this to true if you don't want to track AJAX
        }

        return false;
    }

    /**
     * Track the visitor
     */
    private function trackVisitor(Request $request): void
    {
        try {
            $ipAddress = $this->getClientIp($request);
            $userAgent = $request->userAgent();
            $url = $request->fullUrl();
            $method = $request->method();

            // Check if this is a unique visit (same IP hasn't visited in the last 30 minutes)
            $recentVisit = Visitor::where('ip_address', $ipAddress)
                ->where('visited_at', '>=', Carbon::now()->subMinutes(30))
                ->first();

            // Always track page views, but we can use this for analytics
            Visitor::create([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'url' => $url,
                'method' => $method,
                'visited_at' => Carbon::now(),
            ]);
        } catch (\Exception $e) {
            // Log the error but don't break the application
            \Log::error('Visitor tracking failed: ' . $e->getMessage());
        }
    }

    /**
     * Get the real client IP address
     */
    private function getClientIp(Request $request): string
    {
        // Check for various headers that might contain the real IP
        $ipHeaders = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'REMOTE_ADDR'
        ];

        foreach ($ipHeaders as $header) {
            if ($request->server($header) && $request->server($header) !== 'unknown') {
                $ips = explode(',', $request->server($header));
                $ip = trim($ips[0]);
                
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                    return $ip;
                }
            }
        }

        return $request->ip() ?? '127.0.0.1';
    }
}
