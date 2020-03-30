<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

// GUEST
Route::get('/', 'HomeController@index')->name('home');
Route::get('/rumahsakit', 'HomeController@rumahsakit')->name('rumahsakit');
Route::get('/kebutuhan', 'HomeController@kebutuhan')->name('kebutuhan');
Route::get('/donatur', 'HomeController@donatur')->name('donatur');
Route::get('/penyedia', 'HomeController@penyedia')->name('penyedia');
Route::get('/donasinya', 'HomeController@donasinya')->name('donasinya');

// ADMIN
Route::get('/rumahsakit-admin', 'RumahSakitController@index')->name('rumahsakit');
Route::get('/kebutuhan-admin', 'RumahSakitController@kebutuhan')->name('kebutuhan');
Route::post('/kebutuhan-admin/create', 'RumahSakitController@create1');
Route::get('/donatur-admin', 'RumahSakitController@donatur')->name('donatur');
Route::post('/donatur-admin/create', 'RumahSakitController@create2');
Route::get('/penyedia-admin', 'RumahSakitController@penyedia')->name('penyedia');
Route::post('/penyedia-admin/create', 'RumahSakitController@create3');
Route::get('/donasinya-admin', 'RumahSakitController@donasinya')->name('donasinya');
Route::post('/donasinya-admin/create', 'RumahSakitController@create_d');