<?php

use Illuminate\Support\Facades\Route;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

Route::middleware('auth', 'isUser', 'Check2FA')->group(function () {
    Route::get('/user/dashboard', [\App\Http\Controllers\UserController::class, 'dashboard'])->middleware(['auth'])->name('users.dashboard');
    Route::get('/user/deposit', [\App\Http\Controllers\UserController::class, 'deposit'])->middleware(['auth'])->name('users.deposit');
    Route::get('/user/operations', [\App\Http\Controllers\UserController::class, 'operations'])->middleware(['auth'])->name('users.deposit');
    Route::get('/user/withdraw', [\App\Http\Controllers\UserController::class, 'withdraw'])->middleware(['auth'])->name('users.withdraw');
    Route::get('/user/setting', [\App\Http\Controllers\UserController::class, 'setting'])->middleware(['auth'])->name('users.setting');
    Route::get('/user/ticket', [\App\Http\Controllers\UserController::class, 'ticket'])->middleware(['auth'])->name('users.ticket');
    Route::get('/user/investment-plans', [\App\Http\Controllers\UserController::class, 'investment'])->middleware(['auth'])->name('users.investment');
    Route::get('/user/investment/{id}', [\App\Http\Controllers\UserController::class, 'investmentPlan'])->middleware(['auth'])->name('user.investment-plan');

    Route::post('/user/wallet/create', [\App\Http\Controllers\UserController::class, 'createWallet'])->middleware(['auth'])->name('activate_wallet');
    Route::get('/user/deposit/pay', [\App\Http\Controllers\UserController::class, 'depositMake'])->middleware(['auth'])->name('deposit.make');
    Route::post('/user/deposit/pay', [\App\Http\Controllers\UserController::class, 'addDeposit'])->middleware(['auth'])->name('deposit.addDeposit');
    Route::post('/user/investment', [\App\Http\Controllers\UserController::class, 'investmentPlanSubmit'])->middleware(['auth'])->name('investment.selectInvestment');
    Route::get('/user/refferals', [\App\Http\Controllers\UserController::class, 'refferals'])->middleware(['auth'])->name('investment.refferals');

    Route::get('/user/withdrawal/pay', [\App\Http\Controllers\UserController::class, 'WithdrawalMake'])->middleware(['auth'])->name('withdrawal.make');
    Route::get('/user/transfer-earnings', [\App\Http\Controllers\UserController::class, 'transfer'])->middleware(['auth'])->name('transfer.start');
    Route::get('/user/transfer/pay', [\App\Http\Controllers\UserController::class, 'transferPay'])->middleware(['auth'])->name('transfer.make');
    Route::get('/user/investments', [\App\Http\Controllers\UserController::class, 'investments'])->middleware(['auth'])->name('users.investments');
    Route::post('/user/withdrawal/pay', [\App\Http\Controllers\UserController::class, 'addwithdrawal'])->middleware(['auth'])->name('withdrawal.addDeposit');
    Route::post('/user/setting', [\App\Http\Controllers\UserController::class, 'updateAddress'])->middleware(['auth'])->name('users.updateAddress');

    Route::post('/user/ticket', [\App\Http\Controllers\UserController::class, 'send'])->middleware(['auth'])->name('users.sendticket');
});
