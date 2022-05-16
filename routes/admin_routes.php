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

    Route::get('admin/users/{id}', [ProfileController::class, 'usersShow'])->name('admin.users.show');
    Route::get('admin/users/edit/{id}', [ProfileController::class, 'usersEdit'])->name('admin.users.edit');
});
