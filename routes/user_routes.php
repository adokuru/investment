<?php

use Illuminate\Support\Facades\Route;
use WisdomDiala\Cryptocap\Facades\Cryptocap;


Route::get('/user/dashboard', [\App\Http\Controllers\UserController::class, 'index'])->middleware(['auth'])->name('users.dashboard');