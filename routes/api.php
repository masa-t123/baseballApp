<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 順位表
Route::get('/v1/rank', 'Api\Rank\RankController@index');

// 成績
Route::get('/v1/record/batter', 'Api\Record\Batter\RecordBatterController@index');
Route::get('/v1/record/pitcher', 'Api\Record\Pitcher\RecordPitcherController@index');
