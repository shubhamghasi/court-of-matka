<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MarketController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\NumberAmountController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoubtCheckController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatkaBetsController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TypeController;
use App\Models\NumberAmount;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/verify-otp', [AuthController::class, 'verifyOtp'])->name('validate-otp');
Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('resend-otp');
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'store'])->name('login.store');
    Route::post('attemptLogin', [AuthController::class, 'attemptLogin'])->name('attemptLogin');
    Route::prefix('admin')->group(function () {
        Route::match(['get', 'post'], 'login', [LoginController::class, 'index'])->name('admin.login');
    });
});
Route::middleware(['auth', 'validated_email'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('send-matka-bet', [MatkaBetsController::class, 'handleMatkaBet'])->name('handleMatkaBet');
    Route::match(['get', 'post'], 'prediction', [PredictionController::class, 'index'])->name('predict.store');
    Route::post('refunds/store', [RefundController::class, 'store'])->name('refund.store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/notifications', [NotificationController::class, 'getAllNotificationOfUser'])->name('getAllNotificationOfUser');
    Route::post('/notifications/{id}/mark-as-read', [NotificationController::class, 'markAsRead'])
        ->name('notifications.markAsRead');
    Route::post('/doubt-check/submit', [PredictionController::class, 'submitDoubt'])->name('doubt.check.submit');
    Route::post('/notifications/doubt/{id}/mark-as-read', [NotificationController::class, 'markDoubtAsRead'])
        ->name('notifications.doubt.markAsRead');
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
    Route::resource('number-types', TypeController::class)->names('admin.number.type');
    Route::resource('manage-numbers', NumberAmountController::class)->names('admin.manage.number');
    Route::post('trends/{id}/generate-number', [PredictionController::class, 'updatePredictedNumber'])
        ->name('admin.trends.generate-number');
    Route::post('trends/send-number/{id}', [PredictionController::class, 'sendNumberToUser'])
        ->name('admin.trends.send-number');
    Route::match(['get', 'post'], 'users', [UserController::class, 'index'])->name('admin.user');
    Route::get('settings', [SettingsController::class, 'edit'])->name('admin.settings.edit');
    Route::post('settings', [SettingsController::class, 'update'])->name('admin.settings.update');
    Route::resource('notifications', NotificationController::class)->names('admin.notifications');
    Route::resource('doubt-check', DoubtCheckController::class)->names('admin.doubt');
    Route::post('doubt-check/resolve/{id}', [DoubtCheckController::class, 'markAsResolved'])->name('admin.doubt.mark-resolved');
    Route::post('analyze/{id}', [DoubtCheckController::class, 'analyze'])->name('admin.doubt.analyze');
    Route::post('doubt/send-result/{id}', [DoubtCheckController::class, 'sendResult'])->name('admin.doubt.send-result');
});

Route::get('/notifications/data', [NotificationController::class, 'getNotifications'])->name('notifications.json');
