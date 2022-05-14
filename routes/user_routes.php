<?php

use Illuminate\Support\Facades\Route;
use WisdomDiala\Cryptocap\Facades\Cryptocap;


Route::get('/user/dashboard', [\App\Http\Controllers\UserController::class, 'dashboard'])->middleware(['auth'])->name('users.dashboard');

Route::post('/user/wallet/create', [\App\Http\Controllers\UserController::class, 'createWallet'])->middleware(['auth'])->name('activate_wallet');