<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin_routes.php';
require __DIR__.'/user_routes.php';
require __DIR__.'/public_routes.php';

