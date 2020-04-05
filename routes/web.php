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

Route::get('/daerah1', 'HomeController@daerah1')->name('daerah1');
Route::get('/daerah2', 'HomeController@daerah2')->name('daerah2');
Route::get('/daerah3', 'HomeController@daerah3')->name('daerah3');
Route::get('/daerah4', 'HomeController@daerah4')->name('daerah4');
Route::get('/daerah5', 'HomeController@daerah5')->name('daerah5');
Route::get('/daerah6', 'HomeController@daerah-6')->name('daerah6');
Route::get('/daerah7', 'HomeController@daerah7')->name('daerah7');
Route::get('/daerah8', 'HomeController@daerah8')->name('daerah8');
Route::get('/daerah9', 'HomeController@daerah9')->name('daerah9');
Route::get('/daerah10', 'HomeController@daerah10')->name('daerah10');
Route::get('/daerah11', 'HomeController@daerah11')->name('daerah11');
Route::get('/daerah12', 'HomeController@daerah12')->name('daerah12');
Route::get('/daerah13', 'HomeController@daerah13')->name('daerah13');
Route::get('/daerah14', 'HomeController@daerah14')->name('daerah14');
Route::get('/daerah15', 'HomeController@daerah15')->name('daerah15');
Route::get('/daerah16', 'HomeController@daerah16')->name('daerah16');
Route::get('/daerah17', 'HomeController@daerah17')->name('daerah17');
Route::get('/daerah18', 'HomeController@daerah18')->name('daerah18');
Route::get('/daerah19', 'HomeController@daerah19')->name('daerah19');
Route::get('/pasien', 'HomeController@pasien')->name('pasien');
Route::get('/landingpage', 'HomeController@landingpage')->name('landingpage');

//TESTING
Route::get('/popup1', 'HomeController@popup1')->name('popup1');
Route::get('/popup2', 'HomeController@popup2')->name('popup2');
Route::get('/popup3', 'HomeController@popup3')->name('popup3');
Route::get('/popup4', 'HomeController@popup4')->name('popup4');

//

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
Route::get('/pasien-admin', 'RumahSakitController@pasien')->name('pasien');
Route::post('/pasien-admin/create', 'RumahSakitController@create_d');

//EDIT DELETE
Route::get('/kebutuhan-admin/delete/{id}', 'RumahSakitController@delete1');
Route::get('/donatur-admin/delete/{id}', 'RumahSakitController@delete2');
Route::get('/penyedia-admin/delete/{id}', 'RumahSakitController@delete3');

Route::get('/donatur-admin/edit/{id}', 'RumahSakitController@edit2');
Route::put('/donatur-admin/update/{id}', 'RumahSakitController@update2');
// https://rogerdudler.github.io/git-guide/index.id.html
