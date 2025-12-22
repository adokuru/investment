<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Check2FA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // For API requests with Sanctum token, skip session check
        // Token is only issued after 2FA verification, so valid token = 2FA verified
        if (($request->expectsJson() || $request->is('api/*')) && $request->user()) {
            // User has valid token, which means 2FA was already verified
            return $next($request);
        }

        // For web requests, check session
        if (!Session::has('user_2fa')) {
            // Return JSON response for API requests without token
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'message' => 'Two-factor authentication required.',
                    'error' => '2FA Required',
                    'requires_2fa' => true
                ], 403);
            }

            return redirect()->route('2fa.index');
        }

        return $next($request);
    }
}
