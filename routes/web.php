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
Route::get('/penyaluran', 'HomeController@penyaluran')->name('penyaluran');

Route::get('/Agam', 'HomeController@landingpage')->name('daerah1');
Route::get('/Dharmasraya', 'HomeController@landingpage')->name('daerah2');
Route::get('/KepulauanMentawai', 'HomeController@landingpage')->name('daerah3');
Route::get('/Bukittinggi', 'HomeController@landingpage')->name('daerah4');
Route::get('/Padang', 'HomeController@landingpage')->name('daerah5');
Route::get('/PadangPanjang', 'HomeController@landingpage')->name('daerah6');
Route::get('/Pariaman', 'HomeController@landingpage')->name('daerah7');
Route::get('/Payakumbuh', 'HomeController@landingpage')->name('daerah8');
Route::get('/SawahLunto', 'HomeController@landingpage')->name('daerah9');
Route::get('/KotaSolok', 'HomeController@landingpage')->name('daerah10');
Route::get('/50Kota', 'HomeController@landingpage')->name('daerah11');
Route::get('/PadangPariaman', 'HomeController@landingpage')->name('daerah12');
Route::get('/Pasaman', 'HomeController@landingpage')->name('daerah13');
Route::get('/PasamanBarat', 'HomeController@landingpage')->name('daerah14');
Route::get('/PesisirSelatan', 'HomeController@landingpage')->name('daerah15');
Route::get('/Sijunjung', 'HomeController@landingpage')->name('daerah16');
Route::get('/Solok', 'HomeController@landingpage')->name('daerah17');
Route::get('/SolokSelatan', 'HomeController@landingpage')->name('daerah18');
Route::get('/TanahDatar', 'HomeController@landingpage')->name('daerah19');
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
Route::post('/pasien-admin/create', 'RumahSakitController@createPasien');
Route::get('/pasien-admin/{id}/edit','RumahSakitController@editPasien');
Route::post('/pasien-admin/{id}/update','RumahSakitController@updatePasien');
Route::get('/pebanding-admin', 'RumahSakitController@pebanding')->name('pebanding');
Route::post('/pebanding-admin/create', 'RumahSakitController@createPebanding');

//EDIT DELETE
Route::get('/kebutuhan-admin/delete/{id}', 'RumahSakitController@delete1');
Route::get('/donatur-admin/delete/{id}', 'RumahSakitController@delete2');
Route::get('/penyedia-admin/delete/{id}', 'RumahSakitController@delete3');
Route::get('/pebanding-admin/delete/{id}', 'RumahSakitController@delete4');

Route::get('/donatur-admin/edit/{id}', 'RumahSakitController@edit2');
Route::put('/donatur-admin/update/{id}', 'RumahSakitController@update2');
// https://rogerdudler.github.io/git-guide/index.id.html

//BERITA
Route::get('/berkepapd', 'HomeController@apd')->name('berkepapd');
Route::get('/berdars', 'HomeController@berdars')->name('berdars');
Route::get('/berdapukes', 'HomeController@berdapukes')->name('berdapukes');
Route::get('/bercat', 'HomeController@bercat')->name('bercat');

//IMPORT EXCEL
Route::post('/kebutuhan/import_excel', 'RumahSakitController@import_excel_kebutuhan');
Route::post('/donatur/import_excel', 'RumahSakitController@import_excel_donatur');
Route::post('/pebanding/import_excel', 'RumahSakitController@import_excel_pebanding');