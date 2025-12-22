<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{


    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $isApiRequest = $request->expectsJson() || $request->is('api/*');
        
        // Only regenerate session for web requests
        if (!$isApiRequest && $request->hasSession()) {
            $request->session()->regenerate();
        }
        
        if (auth()->user()->status == 0) {
            Auth::logout();
            
            if ($isApiRequest) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry your portfolio access is disabled, please contact support.',
                    'error' => 'Account Disabled'
                ], 403);
            }
            
            return redirect()->route('login')->with('error', 'Sorry your portfolio access is disabled, please contact support.');
        }
        
        if (auth()->user()->hasrole('Admin')) {
            if ($isApiRequest) {
                $token = auth()->user()->createToken('auth-token')->plainTextToken;
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful',
                    'user' => auth()->user(),
                    'token' => $token,
                    'requires_2fa' => false
                ], 200);
            }
            return redirect()->route('dashboard');
        }

        auth()->user()->generateCode(auth()->user()->email);

        // For API requests, create a temporary token for 2FA verification
        // This token allows calling the 2FA endpoint but other routes still require 2FA
        if ($isApiRequest) {
            $user = auth()->user();
            // Create token that can be used to verify 2FA
            $token = $user->createToken('2fa-pending-token')->plainTextToken;
            
            return response()->json([
                'success' => true,
                'message' => 'Two-factor authentication code sent to your email',
                'requires_2fa' => true,
                'user' => $user->only(['id', 'name', 'email']),
                'token' => $token // Temporary token for 2FA verification
            ], 200);
        }

        return redirect()->route('2fa.index');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $isApiRequest = $request->expectsJson() || $request->is('api/*');
        
        // Revoke Sanctum token if it exists
        if ($request->user()) {
            $request->user()->currentAccessToken()?->delete();
        }

        // Only use session logout for web requests
        if (!$isApiRequest) {
            Auth::guard('web')->logout();
            
            if ($request->hasSession()) {
                $request->session()->invalidate();
                $request->session()->regenerateToken();
            }
        }

        if ($isApiRequest) {
            return response()->json([
                'success' => true,
                'message' => 'Logged out successfully'
            ], 200);
        }

        return redirect('/');
    }
}
