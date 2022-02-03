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

// Route::get('hello','HelloController@index');
// Route::get('test','HelloController@test');

// 自己紹介
Route::get('introduction', 'IntroductionController@top');
Route::get('self-introduction', 'IntroductionController@selfIntroduction');
Route::get('inquiry-introduction', 'IntroductionController@inquiryIntroduction');
Route::post('inquiry','IntroductionController@store');

// 点数
Route::get('form','Homework1_1Controller@form');
Route::post('form/result','Homework1_1Controller@result');

// 合計値
Route::get('sum','Homework1_2Controller@sum');
Route::post('sum/result','Homework1_2Controller@result');

// ID
Route::get('id','Homework1_3Controller@id');
Route::post('id/result','Homework1_3Controller@result');

// タクシー
Route::get('taxi_form','TaxiController@taxi_form');
Route::post('id/result','Homework1_3Controller@result');