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
    return view('welcome');
});

Route::get('/status', function () {
    return view('status');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buy', 'HomeController@buy')->name('buy');
Route::get('/swap', 'HomeController@swap')->name('swap');
Route::get('/trx', 'HomeController@send')->name('trx');
Route::get('/crypto', 'HomeController@crypto')->name('crypto');
Route::get('/setting', 'HomeController@setting')->name('setting');
Route::get('/btc', 'HomeController@btc')->name('btc');
Route::get('/steller', 'HomeController@steller')->name('steller');
Route::get('/eth', 'HomeController@eth')->name('eth');
Route::get('/hardware', 'HomeController@hardware')->name('hardware');
Route::get('/security', 'HomeController@security')->name('security');
