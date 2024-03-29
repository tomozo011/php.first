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
// Route::get('sample','HelloController@sample');
// Route::post('sample/result','HelloController@sample_result');

// // 自己紹介
// Route::get('introduction', 'IntroductionController@top');
// Route::get('self-introduction', 'IntroductionController@selfIntroduction');
// Route::get('inquiry-introduction', 'IntroductionController@inquiryIntroduction');
// Route::post('inquiry','IntroductionController@store');

// // 点数
// Route::get('form','Homework1_1Controller@form');
// Route::post('form/result','Homework1_1Controller@result');

// // 合計値
// Route::get('sum','Homework1_2Controller@sum');
// Route::post('sum/result','Homework1_2Controller@result');

// // ID
// Route::get('id','Homework1_3Controller@id');
// Route::post('id/result','Homework1_3Controller@result');

// // タクシー
// Route::get('taxi','TaxiController@taxi');
// Route::post('taxi/result','TaxiController@taxi_result');

// // 登録
// Route::get('entry','EntryController@entry');
// Route::post('entry/result','EntryController@store');

// Route::get('getid','EntryController@getid');
// Route::post('getid/result','EntryController@getid_result');
// Route::get('getid/edit','EntryController@edit');

// Route::get('delete', 'EntryController@delete');
// Route::post('delete/id','EntryController@deleteId');

// // ゲーム
// Route::get('quiz','GameController@quiz');
// Route::post('quiz/answer','GameController@answer');

// // アイテム
// Route::get('index','ItemController@index');
// Route::get('items','ItemController@create');
// Route::post('items/entry','ItemController@store');

// Route::get('items/edit/{id}', 'ItemController@edit');
// Route::post('items/edited','ItemController@update');

// Route::get('items/destory/{id}','ItemController@destory');


// Route::get('jq','Jqtest_Controller@test');



Route::get('/', 'BBSController@top');
Route::post('/top_post', 'BBSController@top_post');
Route::get('/edit', 'BBSController@edit');
Route::get('/destory/{id}', 'BBSController@destory');
Route::get('/write/{id}', 'BBSController@write');


Route::get('/comment/{id}', 'BBSController@comment');
Route::post('/comment_save', 'BBSController@comment_save');
Route::get('/edit_comme', 'BBSController@edit_comme');
Route::get('/destory_comme/{id}', 'BBSController@destory_come');
Route::get('/write_comme/{id}', 'BBSController@write_come');

