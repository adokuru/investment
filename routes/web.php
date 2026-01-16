<?php

use App\Models\InvestmentPlan;
use App\Models\Transaction;
use App\Models\UserIvestment;
use App\Models\Wallet;
use App\Models\WalletType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin_routes.php';
require __DIR__ . '/user_routes.php';
require __DIR__ . '/public_routes.php';


Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');
Route::post('2fa', [App\Http\Controllers\TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [App\Http\Controllers\TwoFAController::class, 'resend'])->name('2fa.resend')->middleware('auth');



Route::get('/test2', function () {
    $wallets = Wallet::all();
    foreach ($wallets as $wallet) {
        $wallet->usd_balance = (float) ($wallet->amount * $wallet->walletType->value);
        $wallet->save();
    }
    return 'done';
});


Route::get('/test3', function () {
    $investment = UserIvestment::all();
    foreach ($investment as $invest) {
        if ($invest->days_remaining() < 0) {
            $invest->status = 2;
            $invest->save();
        }
    }
    $transactions = Transaction::where('transaction_type', 'Investment')->get();
    foreach ($transactions as $transaction) {
        $investType = InvestmentPlan::where('id', $transaction->investment_plan_id)->first();
        if (($investType->contract_duration - Carbon::createFromTimestamp(strtotime($transaction->created_at))->diff(Carbon::now())->days) < 0) {
            $transaction->status = 2;
            $transaction->save();
        }
    }
    return 'done changing status';
});