<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('auth.')->prefix('auth')->middleware(['guest'])->group(function () {
    Route::post('customer/login', \App\Http\Controllers\Customer\Auth\LoginController::class)->name('customer.login');
});


Route::name('customer.')->middleware(['auth:customers'])->group(function () {
    Route::prefix('restaurant')->name('restaurant.')->group(function () {
        Route::get('search', \App\Http\Controllers\Customer\Restaurant\SearchController::class)->name('search');
    });

    Route::prefix('kept-bottle')->name('kept-bottle.')->group(function () {
        Route::post('', \App\Http\Controllers\Customer\KeptBottle\StoreController::class)->name('store');
    });
});
