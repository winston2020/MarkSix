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

Route::post('msssc/result','MssscController@result');

Route::post('reward/msssc/add','MssscController@createinstallments');

Route::post('reward/mssc/add','MsscController@createinstallments');
Route::post('reward/mssc/reckonresult','MsscController@reckonresult');