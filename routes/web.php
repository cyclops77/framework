<?php

//=== Role Manager ===//

Route::group(['middleware' => ['auth','checkRole:manager']], function(){

Route::post('/list-pendaftar/acc','PendaftaranKaryawanController@accregistrant');

Route::get('/list-pendaftar','PendaftaranKaryawanController@registrantList');

});

//=== Role Bebas (Harus Auth/Login) ===//

Route::group(['middleware' => ['auth','checkRole:manager,karyawan,bendahara']],function(){
	
Route::resource('/data-karyawan','KaryawanController');

Route::get('/arsip-berkas','BerkasController@arsipBerkas');

Route::get('/berkas-saya','BerkasController@BerkasSaya');

Route::post('/send/ini-berkas','BerkasController@storeBerkas');

Route::get('/berkas-masuk','PengirimanBerkasController@index');

Route::get('/bagi-berkas','PengirimanBerkasController@form');

Route::post('/send/kirim-berkas','PengirimanBerkasController@sendForm');

Route::get('/berkas-terkirim','PengirimanBerkasController@BerkasTerkirim');

Route::get('/berkas-masuk','PengirimanBerkasController@BerkasMasuk');

Route::get('/kirim-chat','ChatController@index');

Route::get('/kirim-chat/{id}','ChatController@lihatPesan');

Route::post('/send/pesan','ChatController@kirimPesan');

});

//=== Role Karyawan ===//

Route::group(['middleware' => ['auth','checkRole:karyawan']], function(){

// Route::get('/kirim-berkas','BerkasController@index');

});

//=== Role Bendahara ===//

Route::group(['middleware' => ['auth','checkRole:bendahara']], function(){

Route::get('/form-keuangan','KeuanganController@form');

Route::post('/send/finance','KeuanganController@storeForm');

Route::get('/index-keuangan','KeuanganController@index');

});

//=== Aktivasi(Perlu / GAK?) ===//

Route::get('/aktivasi-akun','AktivasiController@index');

Route::post('/send/activation','AktivasiController@postActivate');

//=== Login ===//

Route::get('/login','AuthController@index');

Route::post('/postlogin','AuthController@postlogin');

Route::get('/logout','AuthController@logout');

//=== Regist ===//

Route::post('/send/registration','PendaftaranKaryawanController@create');

Route::get('/pendaftaran-karyawan','PendaftaranKaryawanController@index');

//=== TEST DISINI ===//
// Route::group(['prefix' => 'api'], function(){
// 	Route::get('/karyawan', 'KaryawanController@getKaryawanApi');
// });
