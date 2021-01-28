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

Route::resource('/', 'Home2Controller');

Route::resource('/home', 'HomeController');

Route::resource('/signature', 'pages\SignaturePageController');

Route::resource('/info', 'pages\InfoPageController');

Route::resource('/our', 'pages\OurPageController');

Route::resource('/social', 'pages\SocialPageController');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
    Route::resource('/', 'DashboardController');
    Route::resource('/news', 'NewsController');
    Route::resource('/events', 'EventsController');
    Route::resource('/signature', 'SignatureController');
    Route::resource('/investor', 'InvestorController');
    Route::resource('/info', 'InfoController');
    Route::resource('/social', 'SocialController');
    });


Auth::routes();
