<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'store'])->name('login.store');
    Route::post('attemptLogin', [AuthController::class, 'attemptLogin'])->name('attemptLogin');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
});
Route::middleware('auth')->group(function () {
    Route::view('/', 'index')->name('home');
});
