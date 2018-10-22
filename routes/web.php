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
Route::get('active','ActiveController@index');
Route::get('tixian','UserController@tixian');

Route::get('money','MoneyController@index');
Route::get('user','UserController@index');
Route::get('reward;','RewardController@index');
Route::get('reward/msssc','RewardController@index');


Route::group(['middleware'=>['web']],function(){
    Route::get('/','HomeController@index');
    Route::post('user/login','UserController@dologin');
    Route::post('user/regist','UserController@doregist');
    Route::get('user/information','UserController@information');
    Route::get('user/password','UserController@password');
    Route::get('user/message','UserController@message');
    Route::get('user/gold','UserController@gold');
    Route::get('user/service','UserController@service');
    Route::get('user/extension','UserController@extension');
    Route::get('user/withdraw','UserController@withdraw');
    Route::get('user/bank','UserController@bank');
    Route::get('user/addbank','UserController@addbank');
    Route::get('video/id/{id}','VideoController@show');
    Route::get('video/{tag}','VideoController@videolist');

    Route::post('reward/msssc/add','MssscController@createinstallments');

    Route::get('msssc','MssscController@index');
    Route::get('mssc','MsscController@index');

});
