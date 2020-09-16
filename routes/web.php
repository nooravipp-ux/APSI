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
// portal APSI
Route::get('/', function () {
    return view('website.index');
});
Route::get('/contact', 'WebsiteController@contact');
Route::get('/keanggotaan', 'WebsiteController@keanggotaan');
Route::get('/keanggotaan/pendaftaran-satpam', 'KeanggotaanController@pendaftaran_personil');
Route::get('/keanggotaan/pendaftaran-bujp', 'KeanggotaanController@pendaftaran_BUJP');

Auth::routes();

Route::get('/admin', 'DashboardController@dashboard')->name('dashboard');
Route::post('/keanggotaan/daftar', 'KeanggotaanController@simpan_pendaftar');
Route::post('/keanggotaan/daftar-bujp', 'KeanggotaanController@simpan_pendaftar_bujp');

//Admin
Route::get('/admin/pendaftaran', 'KeanggotaanController@data_pendaftar');
Route::get('/admin/pendaftaran/detail/{no_pendaftar}', 'KeanggotaanController@detail_pendaftar')->name('detail.pendaftar','{no_pendaftar}');
Route::get('/admin/pendaftaran-bujp', 'KeanggotaanController@data_pendaftar_bujp');
Route::get('/admin/pendaftaran-bujp/detail/{no_pendaftar}', 'KeanggotaanController@detail_pendaftar_bujp')->name('detail.pendaftar.bujp','{no_pendaftar}');
Route::post('/admin/pendaftaran-bujp/confirm', 'KeanggotaanController@confirmasi_pendaftar_bujp');
Route::post('/admin/pendaftaran/confirm', 'KeanggotaanController@confirmasi_pendaftar_satpam');

Route::get('/admin/pendaftaran/export', 'KeanggotaanController@export_satpam_excel');
Route::get('/admin/pendaftaran-bujp/export', 'KeanggotaanController@export_bujp_excel');