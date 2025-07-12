<?php

use App\Http\Controllers\Client\HomepageController;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('')->controller(HomepageController::class)->group(function () {
    Route::get('', 'index')->name('homepage');
});
