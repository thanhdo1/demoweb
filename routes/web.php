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
    return view('master');
});
Route::get('list',[
    'uses' => 'SanPhamController@getSP']);
Route::get('trangchu',[
    'as'=>'index',
    'uses'=>'SanPhamController@getList'
]);
Route::get('loai',['uses'=>'SanPhamController@getLoai']);
Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=> 'SanPhamController@getLienhe']);
Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=> 'SanPhamController@getGioithieu']);
Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'SanPhamController@getLogin']);
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'SanPhamController@postLogin']);
Route::get('dang-ky',[
    'as'=>'register',
    'uses'=>'SanPhamController@getRegister'
]);
Route::post('dang-ky',[
    'as'=>'register',
    'uses'=>'SanPhamController@postRegister'
]);
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'SanPhamController@getLogout']);
Route::get('search',[
    'as'=>'search',
    'uses'=>'SanPhamController@getSearch']);