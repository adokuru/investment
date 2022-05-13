<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('admin/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('admin/profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('admin/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
