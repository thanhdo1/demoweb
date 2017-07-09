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
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=> 'PageController@getIndex'
	]);
Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=> 'PageController@getLoaiSp']);
Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=> 'PageController@getChitiet']);
Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=> 'PageController@getLienhe']);
Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=> 'PageController@getGioithieu']);
Route::get('search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch']);
Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin']);
Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin']);
Route::get('dang-ky',[
	'as'=>'register',
	'uses'=>'PageController@getRegister'
	]);
Route::post('dang-ky',[
	'as'=>'register',
	'uses'=>'PageController@postRegister'
	]);
Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'PageController@getLogout']);