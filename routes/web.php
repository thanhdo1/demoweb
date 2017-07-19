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
    return view('index');
});

Route::get('list',['uses' => 'SanPhamController@getList']);
Route::get('loai',['uses'=>'SanPhamController@getLoai']);
Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=> 'SanPhamController@getLienhe']);
Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=> 'SanPhamController@getGioithieu']);