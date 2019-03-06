<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


// Admin routes
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('login', 'LoginController@index');
    Route::post('login', 'LoginController@login')->name('admin.login');

    Route::group(['middleware' => 'admin'], function() {
        Route::get('/', 'DashboardController@showAdmin')->name('admin.dashboard');
    });
});

// Site routes
Route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'HomeController@index')->name('home');
});