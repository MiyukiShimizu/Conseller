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
// 1．ルールを決める。
Route::get('/', function () {
    return view('welcome');
});

// ホームページの内容をgetしたら、welcome.phpに表示する。
// 受け取るのは、getかpostしかない。

Route::get('/testtest/', 'TestController@getTest'); 
// /testというアドレスに、Testなんとかphpを見に行く。

// 2．Controllerのファイルを動かす。
// ターミナルにphp artisan make:controller TestControllerと打つとControllerの中にファイルができる。

Route::get('/new/', 'TestController@getForm'); 
//newからデータを得たら、TestControllerのGetForm関数を見る。

//3. データを登録する
Route::post('/store/', 'TestController@storeData'); 
//storeに投げたら、TestControllerのstoredataを見る。

//4. データを登録する
Route::get('/testall/', 'TestController@getAll'); 
//storeに投げたら、TestControllerのgetAll関数を見る。