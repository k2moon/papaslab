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

Route::resource('tsignals', 'TsignalsController');
Route::resource('buynsells', 'BuynsellsController');

Route::get('/buynsell', 'SignalController@buynsell');
Route::get('/elist', 'SignalController@elist');
Route::get('/slist', 'SignalController@slist');
Route::get('/signal', 'SignalController@index');
Route::get('/tsignal', 'SignalController@tsignal');




Route::get('/test', 'SignalController@test');