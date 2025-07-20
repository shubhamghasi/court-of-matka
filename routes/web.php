<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MarketController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatkaBetsController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'store'])->name('login.store');
    Route::post('attemptLogin', [AuthController::class, 'attemptLogin'])->name('attemptLogin');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
    Route::prefix('admin')->group(function () {
        Route::match(['get', 'post'], 'login', [LoginController::class, 'index'])->name('admin.login');
    });
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('send-matka-bet', [MatkaBetsController::class, 'handleMatkaBet'])->name('handleMatkaBet');
    Route::match(['get', 'post'], 'prediction', [PredictionController::class, 'index'])->name('predict.store');
    Route::post('refunds/store', [RefundController::class, 'store'])->name('refund.store');
});


// admin routes 
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.home');
    Route::resource('market', MarketController::class)->names('admin.market');
    Route::get('matka-bet-list', [MatkaBetsController::class, 'getMatkaBetList'])->name('getMatkaBetList');
    Route::get('refund-requests', [RefundController::class, 'index'])->name('admin.refunds');
    Route::prefix('refund')->name('admin.refund.')->group(function () {
        Route::delete('{id}', [RefundController::class, 'destroy'])->name('destroy');
        Route::post('{id}/status', [RefundController::class, 'updateStatus'])->name('update-status');
    });
    Route::get('trends', [PredictionController::class, 'index'])->name('admin.trends');
    Route::get('number-types', [TypeController::class, 'index'])->name('admin.number.type');
    Route::match(['get', 'post'], 'number-types/add', [TypeController::class, 'store'])->name('admin.number.type.add');
    Route::post('trends/{id}/generate-number', [PredictionController::class, 'updatePredictedNumber'])
        ->name('admin.trends.generate-number');
    Route::post('trends/send-number/{id}', [PredictionController::class, 'sendNumberToUser'])
        ->name('admin.trends.send-number');
});
