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

        $request->session()->regenerate();
        
        if (auth()->user()->status == 0) {
            Auth::logout();
            
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry your portfolio access is disabled, please contact support.',
                    'error' => 'Account Disabled'
                ], 403);
            }
            
            return redirect()->route('login')->with('error', 'Sorry your portfolio access is disabled, please contact support.');
        }
        
        if (auth()->user()->hasrole('Admin')) {
            if ($request->expectsJson() || $request->is('api/*')) {
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

        // For API requests, return JSON with 2FA requirement
        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json([
                'success' => true,
                'message' => 'Two-factor authentication code sent to your email',
                'requires_2fa' => true,
                'user' => auth()->user()->only(['id', 'name', 'email'])
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
        // Revoke Sanctum token if it exists
        if ($request->user()) {
            $request->user()->currentAccessToken()?->delete();
        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json([
                'success' => true,
                'message' => 'Logged out successfully'
            ], 200);
        }

        return redirect('/');
    }
}
