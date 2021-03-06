<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'KeywordsController@index');

Route::resource('keywords', 'KeywordsController');

Route::get('showImportCSV', 'GdatasController@showImportCSV')->name('gdatas.showImportCSV');
Route::post('showImportCSV', 'GdatasController@importCSV');

Route::get('showimportKeyword', 'KeywordsController@showimportKeyword')->name('gdatas.showimportKeyword');
Route::post('showimportKeyword', 'KeywordsController@importKeyword');

