<?php

use Illuminate\Support\Facades\Route;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

Route::middleware('auth', 'isUser')->group(function () {
    Route::get('/user/dashboard', [\App\Http\Controllers\UserController::class, 'dashboard'])->middleware(['auth', 'Check2FA'])->name('users.dashboard');
    Route::get('/user/deposit', [\App\Http\Controllers\UserController::class, 'deposit'])->middleware(['auth', 'Check2FA'])->name('users.deposit');
    Route::get('/user/operations', [\App\Http\Controllers\UserController::class, 'operations'])->middleware(['auth', 'Check2FA'])->name('users.deposit');
    Route::get('/user/withdraw', [\App\Http\Controllers\UserController::class, 'withdraw'])->middleware(['auth', 'Check2FA'])->name('users.withdraw');
    Route::get('/user/setting', [\App\Http\Controllers\UserController::class, 'setting'])->middleware(['auth', 'Check2FA'])->name('users.setting');
    Route::get('/user/ticket', [\App\Http\Controllers\UserController::class, 'ticket'])->middleware(['auth', 'Check2FA'])->name('users.ticket');
    Route::get('/user/investment-plans', [\App\Http\Controllers\UserController::class, 'investment'])->middleware(['auth', 'Check2FA'])->name('users.investment');
    Route::get('/user/investment/{id}', [\App\Http\Controllers\UserController::class, 'investmentPlan'])->middleware(['auth', 'Check2FA'])->name('user.investment-plan');

    Route::post('/user/wallet/create', [\App\Http\Controllers\UserController::class, 'createWallet'])->middleware(['auth', 'Check2FA'])->name('activate_wallet');
    Route::get('/user/deposit/pay', [\App\Http\Controllers\UserController::class, 'depositMake'])->middleware(['auth', 'Check2FA'])->name('deposit.make');
    Route::post('/user/deposit/pay', [\App\Http\Controllers\UserController::class, 'addDeposit'])->middleware(['auth', 'Check2FA'])->name('deposit.addDeposit');
    Route::post('/user/investment', [\App\Http\Controllers\UserController::class, 'investmentPlanSubmit'])->middleware(['auth', 'Check2FA'])->name('investment.selectInvestment');
    Route::get('/user/refferals', [\App\Http\Controllers\UserController::class, 'refferals'])->middleware(['auth', 'Check2FA'])->name('investment.refferals');

    Route::get('/user/withdrawal/pay', [\App\Http\Controllers\UserController::class, 'WithdrawalMake'])->middleware(['auth', 'Check2FA'])->name('withdrawal.make');
    Route::get('/user/transfer-earnings', [\App\Http\Controllers\UserController::class, 'transfer'])->middleware(['auth', 'Check2FA'])->name('transfer.start');
    Route::get('/user/transfer/pay', [\App\Http\Controllers\UserController::class, 'transferPay'])->middleware(['auth', 'Check2FA'])->name('transfer.make');
    Route::get('/user/investments', [\App\Http\Controllers\UserController::class, 'investments'])->middleware(['auth', 'Check2FA'])->name('users.investments');
    Route::post('/user/withdrawal/pay', [\App\Http\Controllers\UserController::class, 'addwithdrawal'])->middleware(['auth', 'Check2FA'])->name('withdrawal.addDeposit');
    Route::post('/user/setting', [\App\Http\Controllers\UserController::class, 'updateAddress'])->middleware(['auth', 'Check2FA'])->name('users.updateAddress');

    Route::post('/user/ticket', [\App\Http\Controllers\UserController::class, 'send'])->middleware(['auth', 'Check2FA'])->name('users.sendticket');
});
