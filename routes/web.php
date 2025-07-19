<?php

use App\Http\Controllers\Client\HomepageController;
use App\Http\Controllers\Client\SupportSytemController;
use App\Http\Middleware\EnsureUnitIsLoggedIn;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('')->group(function () {

    Route::get('', [HomepageController::class, 'index'])->name('homepage');

    Route::prefix('')->controller(SupportSytemController::class)->group(function () {
        Route::get('unit-login', 'index')->name('unit.login');
        Route::post('unit-login', 'unit_login')->name('process.unit.login');

        Route::middleware(EnsureUnitIsLoggedIn::class)->group(function () {
            Route::get('aufogem', 'aufogem')->name('aufogem');
            Route::get('trsm', 'trsm')->name('trsm');
            Route::post('predict-status-aufogem', 'predict')->name('predict.status');
            Route::post('predict-status', 'trsm_predict')->name('trsm.predict');
            Route::get('logout', 'logout')->name('logout');
        });
    });
});
