<?php

use App\Models\UserIvestment;
use App\Models\Wallet;
use App\Models\WalletType;
use Illuminate\Support\Facades\Route;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin_routes.php';
require __DIR__ . '/user_routes.php';
require __DIR__ . '/public_routes.php';


Route::get('/test', function () {
    $walletTypes = WalletType::all();
    foreach ($walletTypes as $walletType) {
        $walletType->updatePrice();
    }
    return 'done';
});


Route::get('/test2', function () {
    $wallets = Wallet::all();
    foreach ($wallets as $wallet) {
        $wallet->usd_balance = (float)($wallet->amount * $wallet->walletType->value);
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
    return 'done changing status';
});
