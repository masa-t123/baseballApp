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

//Route::get('/', function () {
//    return view('welcome');
//});

// TOP
Route::get('/', 'Web\Top\TopController@index');

// Document
Route::get('/document', 'Web\Document\DocumentController@index');
// API - 順位表取得
Route::get('/document/manual/api/rank', 'Web\Document\DocumentController@manualApiRank');
// API - 成績(野手)取得
Route::get('/document/manual/api/record/batter', 'Web\Document\DocumentController@manualApiRecord4Batter');
