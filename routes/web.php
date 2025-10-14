<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tamu', TamuController::class);
