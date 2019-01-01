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




Route::group(['prefix'=>'api/v1'],function(){

    Route::resource('lessons','lessonscontroller');
});

Route::group(array('prefix'=>'api/v1'),function(){
    Route::get('/mc','lessonscontroller@mc');
});

Route::group(array('prefix'=>'api/v1'),function(){
    Route::get('/show','TypeController@show');//分类列表
});
Route::group(array('prefix'=>'api/v1'),function(){
    Route::get('/lista','BookController@lista');//书籍列表页
});
Route::group(array('prefix'=>'api/v1'),function(){
    Route::get('/detail','BookController@detail');//图书详情页
});
Route::group(array('prefix'=>'api/v1'),function(){
    Route::get('/index','CategloryController@index');//目录详情页
});