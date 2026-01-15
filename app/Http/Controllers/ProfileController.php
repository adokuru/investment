<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Services\CryptoPriceService;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
use App\Models\User;
use App\Models\Deposit;
use App\Models\WalletType;

class ProfileController extends Controller
{
	private CryptoPriceService $cryptoPriceService;

	public function __construct(CryptoPriceService $cryptoPriceService)
	{
		$this->cryptoPriceService = $cryptoPriceService;
	}

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
			if ($transaction->transaction_type == 'Withdrawal') {
				$walletType = WalletType::where('symbol', $transaction->currency)->first();
				$transaction->withdraw->update(['status' => 1]);
				$user = User::findOrFail($transaction->user_id);
				$user->earnings = $user->earnings - ($transaction->amount * $walletType->value);
				$user->save();
				// $transaction->user->update(['earnings' => $transaction->user->earnings - ($transaction->amount * $walletType->value)]);
			} else {
				$transaction->deposit->update(['status' => 1]);
				$wallet = Wallet::where('id', $transaction->deposit->wallet_id)->first();
				$wallet->update(['amount' => $wallet->amount + $transaction->amount]);
				// Update Wallet Amount
				$wallet = Wallet::where('id', $transaction->deposit->wallet_id)->first();
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

			if ($transaction->transaction_type == 'Withdrawal') {
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

	public function usersDelete($id)
	{
		$user = \App\Models\User::findOrFail($id);
		$user->delete();
		return redirect()->back()->with('success', 'User deleted.');
	}

	public function usersblock($id)
	{
		$user = \App\Models\User::findOrFail($id);
		if ($user->status == 1) {
			$user->status = 0;
			$user->update();
			return redirect()->back()->with('success', 'User blocked.');
		} else {
			$user->status = 1;
			$user->update();
			return redirect()->back()->with('success', 'User unblocked.');
		}
	}


	public function usersShow($id)
	{
		$user = \App\Models\User::findOrFail($id);
		return view('admin.users.show', compact('user'));
	}

	public function wallets()
	{
		$users = User::with('wallet')->paginate(10);
		//dd($users);
		return view('admin.users.add', compact('users'));
	}

	public function usersAddWallet($id)
	{
		$user = \App\Models\User::with('wallet')->findOrFail($id);
		return view('admin.users.funds', compact('user'));
	}
	public function usersAddWalletID($id)
	{
		$user = \App\Models\User::with('wallet')->findOrFail($id);
		return view('admin.users.funds-copy', compact('user'));
	}

	public function walletUpdate($id, Request $request)
	{
		$user = \App\Models\User::findOrFail($id);
		if ($request->BTCamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 1)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->BTCamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'BTC';
			$transaction->amount = $request->BTCamount;
			$transaction->status = 1;
			$transaction->save();
			$wallet->amount = $wallet->amount + $request->BTCamount;
			$price = $this->cryptoPriceService->getUsdPrice($wallet->walletType->getSymbol);
			if ($price <= 0) {
				$price = (float) $wallet->walletType->value;
			}
			$wallet->usd_balance = $wallet->usd_balance + ($request->BTCamount * $price);
			$wallet->save();
		}
		if ($request->ETHamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 2)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->ETHamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'ETH';
			$transaction->amount = $request->ETHamount;
			$transaction->status = 1;
			$transaction->save();
			$wallet->amount = $wallet->amount + $request->ETHamount;
			$price = $this->cryptoPriceService->getUsdPrice($wallet->walletType->getSymbol);
			if ($price <= 0) {
				$price = (float) $wallet->walletType->value;
			}
			$wallet->usd_balance = $wallet->usd_balance + ($request->ETHamount * $price);
			$wallet->save();
		}
		if ($request->USDTamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 3)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->USDTamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'USDT';
			$transaction->amount = $request->USDTamount;
			$transaction->status = 1;
			$transaction->save();

			$wallet->amount = $wallet->amount + $request->USDTamount;
			$price = $this->cryptoPriceService->getUsdPrice($wallet->walletType->getSymbol);
			if ($price <= 0) {
				$price = (float) $wallet->walletType->value;
			}
			$wallet->usd_balance = $wallet->usd_balance + ($request->USDTamount * $price);
			$wallet->save();
		}

		if ($request->BCHamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 4)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->BCHamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'BCH';
			$transaction->amount = $request->BCHamount;
			$transaction->status = 1;
			$transaction->save();
			$wallet->amount = $wallet->amount + $request->BCHamount;
			$price = $this->cryptoPriceService->getUsdPrice($wallet->walletType->getSymbol);
			if ($price <= 0) {
				$price = (float) $wallet->walletType->value;
			}
			$wallet->usd_balance = $wallet->usd_balance + ($request->BCHamount * $price);
			$wallet->save();
		}

		return redirect()->route('profile.wallets')->with('success', 'User updated.');
	}
	public function walletPendingUpdate($id, Request $request)
	{
		$user = \App\Models\User::findOrFail($id);
		if ($request->BTCamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 1)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->BTCamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'BTC';
			$transaction->amount = $request->BTCamount;
			$transaction->status = 0;
			$transaction->save();
		}
		if ($request->ETHamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 2)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->ETHamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'ETH';
			$transaction->amount = $request->ETHamount;
			$transaction->status = 0;
			$transaction->save();
		}
		if ($request->USDTamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 3)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->USDTamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'USDT';
			$transaction->amount = $request->USDTamount;
			$transaction->status = 0;
			$transaction->save();
		}

		if ($request->BCHamount > 0) {
			$wallet = Wallet::where('user_id', $user->id)->where('wallet_type_id', 4)->where('status', 1)->first();
			$deposit = new Deposit();
			$deposit->user_id = $user->id;
			$deposit->value = $request->BCHamount;
			$deposit->wallet_id = $wallet->id;
			$deposit->save();

			$transaction = new Transaction();
			$transaction->user_id = $user->id;
			$transaction->deposit_id = $deposit->id;
			$transaction->transaction_type = $request->remark;
			$transaction->currency = 'BCH';
			$transaction->amount = $request->BCHamount;
			$transaction->status = 0;
			$transaction->save();
		}

		return redirect()->route('profile.wallets')->with('success', 'User updated.');
	}
}