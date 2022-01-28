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


Route::get('introduction', 'IntroductionController@top');
Route::get('self-introduction', 'IntroductionController@selfIntroduction');
Route::get('inquiry-introduction', 'IntroductionController@inquiryIntroduction');
