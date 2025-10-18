<?php

use App\Http\Controllers\TamuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tamus.index');
});

// Routes untuk Tamu
Route::resource('tamus', TamuController::class);

// Routes untuk User
Route::resource('users', UserController::class);