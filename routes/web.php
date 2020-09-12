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


Auth::routes();

Route::get('/admin', 'DashboardController@dashboard')->name('dashboard');

Route::get('/keanggotaan/pendaftaran', 'KeanggotaanController@pendaftaran_personil');
Route::post('/keanggotaan/daftar', 'KeanggotaanController@simpan_pendaftar');

//Admin
Route::get('/admin/pendaftaran', 'KeanggotaanController@data_pendaftar');
Route::get('/admin/pendaftaran/detail/{no_pendaftar}', 'KeanggotaanController@detail_pendaftar')->name('detail.pendaftar','{no_pendaftar}');

