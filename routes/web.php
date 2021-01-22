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

Route::resource('/', 'HomeController');

Route::resource('/signature', 'pages\SignaturePageController');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
    Route::resource('/', 'DashboardController');
    Route::resource('/news', 'NewsController');
    Route::resource('/events', 'EventsController');
    Route::resource('/signature', 'SignatureController');
    Route::resource('/investor', 'InvestorController');

    });
