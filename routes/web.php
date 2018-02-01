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


Route::match(['get', 'post'], '/', 'DanhSachController@index')->name('home');
Route::get('admin/daboash', 'DanhSachController@indexDaboash')->name('daboash');
Route::post('updateDanhSach', 'DanhSachController@edit')->name('updateDanhSach');