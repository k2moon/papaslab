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

Route::get('/', function () {
    return view('start');
});

Auth::routes();

Route::resource('sinfos', 'SinfosController');
Route::resource('tsignals', 'TsignalsController');
Route::resource('buynsells', 'BuynsellsController');

Route::get('/signal', 'SignalController@index');
