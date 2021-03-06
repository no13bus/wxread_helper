<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::any('serve', 'WechatController@serve');
Route::any('demo', 'WechatController@demo');
Route::any('menu', 'WechatController@menu');
Route::any('test', 'WechatController@test');