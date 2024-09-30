<?php

use Illuminate\Support\Facades\Route;
use Modules\AuthManagement\Http\Controllers\Web\New\Admin\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('login', 'loginView')->name('login');
            Route::post('login', 'login');
            Route::post('external-login-from-mart', 'externalLoginFromMart');
            Route::get('logout', 'logout')->name('logout');
        });
    });
});

