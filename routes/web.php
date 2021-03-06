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
Route::get('/', 'WebsiteController@index');
Route::get('/tentang/sejarah', 'WebsiteController@sejarah');
Route::get('/tentang/visi-misi', 'WebsiteController@visi_misi');
Route::get('/tentang/struktur-organisasi', 'WebsiteController@struktur_organisasi');
Route::get('/keanggotaan', 'WebsiteController@keanggotaan');
Route::get('/keanggotaan/pendaftaran-satpam', 'KeanggotaanController@pendaftaran_personil');
Route::get('/keanggotaan/pendaftaran-bujp', 'KeanggotaanController@pendaftaran_BUJP');
Route::get('/berita', 'WebsiteController@berita');
Route::get('/berita/{slug}', 'WebsiteController@detail_berita');

Route::get('/event', 'WebsiteController@visi_misi');
Route::get('/contact', 'WebsiteController@contact');

Auth::routes();
Route::post('/keanggotaan/daftar', 'KeanggotaanController@simpan_pendaftar');
Route::post('/keanggotaan/daftar-bujp', 'KeanggotaanController@simpan_pendaftar_bujp');

//Admin
Route::get('/admin', 'DashboardController@dashboard')->name('dashboard');
Route::get('/admin/pendaftaran', 'KeanggotaanController@data_pendaftar');
Route::get('/admin/pendaftaran/detail/{no_pendaftar}', 'KeanggotaanController@detail_pendaftar')->name('detail.pendaftar','{no_pendaftar}');
Route::get('/admin/pendaftaran-bujp', 'KeanggotaanController@data_pendaftar_bujp');
Route::get('/admin/pendaftaran-bujp/detail/{no_pendaftar}', 'KeanggotaanController@detail_pendaftar_bujp')->name('detail.pendaftar.bujp','{no_pendaftar}');
Route::post('/admin/pendaftaran-bujp/confirm', 'KeanggotaanController@confirmasi_pendaftar_bujp');
Route::post('/admin/pendaftaran/confirm', 'KeanggotaanController@confirmasi_pendaftar_satpam');

Route::get('/admin/pendaftaran/export', 'KeanggotaanController@export_satpam_excel');
Route::get('/admin/pendaftaran-bujp/export', 'KeanggotaanController@export_bujp_excel');

//Gallery
Route::get('/admin/gallery', 'GalleryController@gallery');
Route::post('/admin/gallery/simpan', 'GalleryController@upload_gambar');
Route::get('/admin/gallery/hapus/{id}', 'GalleryController@delete');

//Posting berita dan event
Route::get('/admin/posts', 'PostsController@post');
Route::get('/admin/posts/create', 'PostsController@create_post');
Route::post('/admin/posts/save', 'PostsController@save_post');
Route::get('/admin/posts/publish/{id}', 'PostsController@publish_post');
Route::get('/admin/posts/delete/{id}', 'PostsController@delete');
