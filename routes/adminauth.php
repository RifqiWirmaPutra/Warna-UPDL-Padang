<?php

use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\AdminAuth\ConfirmablePasswordController;
use App\Http\Controllers\AdminAuth\EmailVerificationNotificationController;
use App\Http\Controllers\AdminAuth\EmailVerificationPromptController;
use App\Http\Controllers\AdminAuth\NewPasswordController;
use App\Http\Controllers\AdminAuth\PasswordController;
use App\Http\Controllers\AdminAuth\PasswordResetLinkController;
use App\Http\Controllers\AdminAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminAuth\RegisteredUserController;

Route::middleware('guest:admin')->group(function () {

    // Route::get('admin/register', [RegisteredUserController::class, 'create'])
    //             ->name('admin.register');

    // Route::post('admin/register', [RegisteredUserController::class, 'store']);
//     // Rute tampilkan formulir pendaftaran admin
// Route::get('/admin/register', 'App\Http\Controllers\AdminAuth\RegisteredUserController@create')
// ->middleware(['guest', 'admin']) // Hanya tamu dengan role admin yang bisa mengakses
// ->name('admin.register');

// Rute proses pendaftaran admin
// Route::post('/admin/register', 'Auth\AdminRegisterController@register')
// ->middleware(['guest', 'admin']) // Hanya tamu dengan role admin yang bisa mengakses
// ->name('admin.register.submit');

    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
                ->name('admin.login');

    Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('admin/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('admin.password.request');

    Route::post('admin/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('admin.password.email');

    Route::get('admin/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('admin.password.reset');

    Route::post('admin/reset-password', [NewPasswordController::class, 'store'])
                ->name('admin.password.store');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {return view('admin.dashboard');})
        ->middleware(['verified'])
        ->name('admin.dashboard');

    Route::get('admin/verify-email', EmailVerificationPromptController::class)
                ->name('admin.verification.notice');

    Route::get('admin/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('admin.verification.verify');

    Route::post('admin/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('admin.verification.send');

    Route::get('admin/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('admin.password.confirm');

    Route::post('admin/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('admin/password', [PasswordController::class, 'update'])->name('admin.password.update');

    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('admin.logout');
});
