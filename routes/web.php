<?php

use App\Http\Controllers\Client\HomepageController;
use App\Http\Controllers\Client\SupportSytemController;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('')->group(function () {

    Route::get('', [HomepageController::class, 'index'])->name('homepage');

    Route::prefix('')->controller(SupportSytemController::class)->group(function () {
        Route::get('/unit-login', 'index')->name('unit.login');
        Route::get('/aufogem', 'aufogem')->name('aufogem');
        Route::get('/trsm', 'trsm')->name('trsm');
    });
});
