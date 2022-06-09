<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Profile updated.');
    }

    public function showTransaction()
    {
        $transactions = Transaction::with('user')->paginate(10);
        return view('admin.transactions.index', compact('transactions'));
    }

    public function approveTransaction($id)
    {
        DB::transaction(function () use ($id) {
            $transaction = Transaction::findOrFail($id);
            $transaction->update(['status' => 1]);
            if ($transaction->type == 'withdraw') {
                $transaction->withdraw->update(['status' => 1]);
                $transaction->user->update(['earnings' => $transaction->user->earnings - $transaction->amount]);
            } else {
                $transaction->deposit->update(['status' => 1]);
                $wallet = Wallet->where('id', $transaction->deposit->wallet_id)->first();
                $wallet->update(['amount' => $wallet->amount + $transaction->amount]);
                // Update Wallet Amount
                $wallet = $transaction->user->wallet->where('id', $transaction->deposit->wallet_id)->first();
                $walletType = $wallet->walletType;
                $wallet->usd_balance = $wallet->amount * $walletType->value;
                $wallet->update();
            }
        });
        return redirect()->back()->with('success', 'Transaction approved.');
    }

    public function rejectTransaction($id)
    {
        DB::transaction(function () use ($id) {
            $transaction = Transaction::findOrFail($id);
            $transaction->update(['status' => 2]);

            if ($transaction->type == 'withdraw') {
                $transaction->withdraw->update(['status' => 2]);
            } else {
                $transaction->deposit->update(['status' => 2]);
            }
        });


        return redirect()->back()->with('success', 'Transaction rejected.');
    }

    public function usersEdit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function usersUpdate($id, Request $request)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->earnings = $request->earnings;
        $user->update();
        return redirect()->route('dashboard')->with('success', 'User updated.');
    }

    public function usersShow($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }
}
