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

Route::get('','HomeController@index');
Route::get('login','UserController@login');
Route::get('regist','UserController@regist');
Route::get('active','HomeController@index');
Route::get('money','HomeController@index');
Route::get('user','HomeController@index');
Route::get('reward;','HomeController@index');
Route::get('reward/msssc','RewardController@index');


Route::group(['middleware'=>['web']],function(){
    Route::get('/','HomeController@index');
    Route::post('user/login','UserController@dologin');
    Route::post('user/regist','UserController@doregist');

    Route::get('msssc','MssscController@index');
    Route::get('mssc','MssscController@index');
});
