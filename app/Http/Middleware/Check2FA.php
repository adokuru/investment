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
        $isApiRequest = $request->expectsJson() || $request->is('api/*');
        
        // For API requests with Sanctum token
        if ($isApiRequest && $request->user()) {
            $currentToken = $request->user()->currentAccessToken();
            
            // If token exists and is NOT the temporary 2FA pending token, allow access
            // Regular tokens are only created after 2FA verification
            if ($currentToken && $currentToken->name !== '2fa-pending-token') {
                return $next($request);
            }
            
            // Temporary token or no token - require 2FA
            return response()->json([
                'message' => 'Two-factor authentication required.',
                'error' => '2FA Required',
                'requires_2fa' => true
            ], 403);
        }

        // For web requests, check session
        if (!Session::has('user_2fa')) {
            // Return JSON response for API requests without token
            if ($isApiRequest) {
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
