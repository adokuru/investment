<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('admin.users.index', compact('users'));
    }
    public function dashboard()
    {
        $user = auth()->user();
        $bitconwallet = $user->wallet->where('wallet_type_id', 1)->where('status', 1)->first();
        $ethwallet = $user->wallet->where('wallet_type_id', 2)->where('status', 1)->first();
        $btcashwallet = $user->wallet->where('wallet_type_id', 4)->where('status', 1)->first();
        $usdtwallet = $user->wallet->where('wallet_type_id', 3)->where('status', 1)->first();
        return view('users.dashboard', compact('user', 'bitconwallet', 'ethwallet', 'btcashwallet', 'usdtwallet'));
    }

    public function createWallet(Request $request)
    {
        $user = auth()->user();
        Wallet::create([
            'wallet_type_id' => $request->wallet_type_id,
            'user_id' => $user->id,
            'usd_balance' => 0,
            'amount' => 0,
            'status' => 1,
        ]);
        return redirect()->route('users.dashboard');
    }
}
