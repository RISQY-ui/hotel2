<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function() {
    Route::get('/register',[AuthController::class, 'showREgisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});