<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use App\Models\UserCode;
use Illuminate\Support\Facades\Session as FacadesSession;

class TwoFAController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('2fa');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $find = UserCode::where('user_id', auth()->user()->id)
            ->where('code', $request->code)
            ->where('updated_at', '>=', now()->subMinutes(2))
            ->first();

        if (!is_null($find)) {
            FacadesSession::put('user_2fa', auth()->user()->id);
            
            // For API requests, return JSON with token
            if ($request->expectsJson() || $request->is('api/*')) {
                $user = auth()->user();
                $token = $user->createToken('auth-token')->plainTextToken;
                
                return response()->json([
                    'success' => true,
                    'message' => 'Two-factor authentication verified successfully',
                    'user' => $user,
                    'token' => $token,
                    'requires_2fa' => false
                ], 200);
            }
            
            return redirect()->route('users.dashboard');
        }

        // For API requests, return JSON error
        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json([
                'success' => false,
                'message' => 'You entered wrong code.',
                'error' => 'Invalid 2FA Code'
            ], 422);
        }

        return back()->with('error', 'You entered wrong code.');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function resend()
    {
        $user = User::where('id', auth()->user()->id)->first();

        $user->generateCode($user->email);

        // For API requests, return JSON
        if (request()->expectsJson() || request()->is('api/*')) {
            return response()->json([
                'success' => true,
                'message' => 'We sent you code on your email.'
            ], 200);
        }

        return back()->with('success', 'We sent you code on your email.');
    }
}
