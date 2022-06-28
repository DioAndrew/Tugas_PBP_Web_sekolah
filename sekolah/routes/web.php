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

Route::get('/home','App\Http\Controllers\homeController@tampilkan_home');
Route::get('/profil','App\Http\Controllers\profilController@tampilkan_profil');
Route::get('/fasilitas','App\Http\Controllers\fasilitasController@tampilkan_fasilitas');
Route::get('/data-guru','App\Http\Controllers\GuruController@tampilkan_data_guru_admin');
Route::get('/tambah-data','App\Http\Controllers\GuruController@tampilkan_tambah_data_guru');
Route::post('/tambah-data','App\Http\Controllers\GuruController@tambah_data_guru');
Route::get('/data-guru/edit/{data}','App\Http\Controllers\GuruController@tampilkan_edit_guru');
Route::put('/data-guru/edit/{data}','App\Http\Controllers\GuruController@update_data_guru');
Route::delete('/data-guru/delete/{data}','App\Http\Controllers\GuruController@hapus_data_guru');
Route::get('/pengajar','App\Http\Controllers\GuruController@tampilkan_pengajar');
Route::get('/input-pengumuman','App\Http\Controllers\PengumumanController@tampilkan_input_pengumuman');
Route::post('/input-pengumuman','App\Http\Controllers\PengumumanController@simpan_pengumuman');
Route::get('/data-pengumuman/edit/{data}','App\Http\Controllers\PengumumanController@tampilkan_edit_pengumuman');
Route::put('/data-pengumuman/edit/{data}','App\Http\Controllers\PengumumanController@update_data_pengumuman');
Route::delete('/data-pengumuman/hapus/{data}','App\Http\Controllers\PengumumanController@hapus_data_pengumuman');
Route::get('/daftar-pengumuman','App\Http\Controllers\PengumumanController@tampilkan_daftar_pengumuman');
Route::get('/pengumuman','App\Http\Controllers\PengumumanController@tampilkan_pengumuman');
Route::get('/login','App\Http\Controllers\loginController@tampilkan_login');
Route::post('/login','App\Http\Controllers\loginController@authenticate');
Route::get('/registrasi','App\Http\Controllers\registerController@tampilkan_register');
Route::post('/registrasi','App\Http\Controllers\registerController@simpan_registrasi');
Route::get('/logout','App\Http\Controllers\logoutController@logout');

