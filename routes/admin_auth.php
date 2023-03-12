<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Http\Controllers\Auth\LogoutController;
use Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

//    Route::get('register', Register::class)
//        ->name('register');
});

Route::prefix('password')
    ->name('password.')
    ->group(function () {
        Route::get('/reset', Passwords\Email::class)
            ->name('request');
        Route::get('/reset/{token}', Passwords\Reset::class)
            ->name('reset');
    });

Route::middleware('auth:admin')->group(function () {
//    Route::get('email/verify', Verify::class)
//        ->middleware('throttle:6,1')
//        ->name('verification.notice');

    Route::get('password/confirm', Passwords\Confirm::class)
        ->name('password.confirm');

//    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
//        ->middleware('signed')
//        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
