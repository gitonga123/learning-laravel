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

Route::get('/', 'SignaturesController@index')->name('home');

Route::resource('signatures', 'Api\SignatureController')
    ->only(['index', 'store', 'show']);

Route::put('signatures/{signatures}/report', 'Api\ReportSignature@update');

Route::get('sign', 'SignaturesController@create')->name('sign');

