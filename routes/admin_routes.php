<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('admin/users', [UserController::class, 'index'])->name('users.index');
    // Transaction
    Route::get('admin/transactions', [ProfileController::class, 'showTransaction'])->name('users.transactions');
    Route::get('admin/transactions/{id}', [ProfileController::class, 'showTransactionDetail'])->name('users.transactions.detail');
    Route::get('admin/approve-transactions/{id}', [ProfileController::class, 'approveTransaction'])->name('users.approve-transactions');
    Route::get('admin/reject-transactions/{id}', [ProfileController::class, 'rejectTransaction'])->name('users.reject-transactions');

    Route::get('admin/profile', [ProfileController::class, 'show'])->name('profile.show');

    Route::put('admin/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('admin/wallets', [ProfileController::class, 'wallets'])->name('profile.wallets');

    Route::get('admin/users/wallet/{id}', [ProfileController::class, 'usersAddWallet'])->name('admin.wallet.update');

    Route::post('admin/wallets/update/{id}', [ProfileController::class, 'walletUpdate'])->name('profile.wallet.update');

    Route::get('admin/users/{id}', [ProfileController::class, 'usersShow'])->name('admin.users.show');
    Route::get('admin/users/edit/{id}', [ProfileController::class, 'usersEdit'])->name('admin.users.edit');
    Route::post('admin/users/update/{id}', [ProfileController::class, 'usersUpdate'])->name('admin.users.update');

    Route::get('admin/users/block/{id}', [ProfileController::class, 'usersblock'])->name('admin.users.block');
});