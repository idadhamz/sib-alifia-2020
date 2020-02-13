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
    return view('login.login');
});

Route::get('/login', function () {
	return view('login.login');
});

Route::get('/daftarPemohon', function () {
	return view('login.register');
});

Route::post('/register','AdminController@register_akun'); 

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(['middleware' => ['auth', 'checkRole:1,2,3,4,5']], function(){

	// Dashboard
	Route::get('/dashboard', 'DashboardController@index');

});

Route::group(['middleware' => ['auth', 'checkRole:1']], function(){

	Route::prefix('dataUser')->group(function () {
	    Route::get('index','AdminController@index_data_user');
	    Route::get('create','AdminController@create_data_user'); 
	    Route::post('store','AdminController@store_data_user'); 
	    Route::get('edit/{id}','AdminController@edit_data_user');
	    Route::post('update/{id}','AdminController@update_data_user');
	    Route::get('delete/{id}','AdminController@delete_data_user');
	});	

	Route::prefix('dataDiriPemohon')->group(function () {
	    Route::get('index','AdminController@index_data_diri');
	    Route::get('create','AdminController@create_data_diri'); 
	    Route::post('store','AdminController@store_data_diri'); 
	    Route::get('edit/{id}','AdminController@edit_data_diri');
	    Route::post('update/{id}','AdminController@update_data_diri');
	    // Route::get('delete/{id}','AdminController@delete_data_diri');
	    Route::post('delete','AdminController@delete_data_diri');
	    Route::get('lihat/{id}','AdminController@view_data_diri');
	});

	Route::prefix('uploadBerkas')->group(function () {
	    Route::get('index','AdminController@index_upload_berkas');
	    Route::get('upload/{id}','AdminController@upload_upload_berkas');
	    Route::post('save','AdminController@save_upload_berkas');
	    Route::get('view/{id}','AdminController@view_upload_berkas');
	});

	Route::prefix('cetakIdpAdmin')->group(function () {
	    Route::get('index','AdminController@index_cetak_idp');
	});

});

Route::group(['middleware' => ['auth', 'checkRole:2,3,4,5']], function(){
	Route::prefix('setting-akun')->group(function () {
	    Route::get('index','SettingAkunController@index_akun');
	    Route::get('edit/{id}','SettingAkunController@edit_akun');
	    Route::post('update/{id}','SettingAkunController@update_akun');
	});
});

Route::group(['middleware' => ['auth', 'checkRole:1,3']], function(){
	Route::prefix('verifikasi')->group(function () {
	    Route::get('index','AdminController@index_verifikasi');
	    Route::post('store','AdminController@store_verifikasi');
	});

	Route::prefix('dataDiriPemohonSpk')->group(function () {
	    Route::get('index','SpkController@index_data_pemohon');
	    Route::get('lihat/{id}','SpkController@view_data_pemohon');
	});

	Route::prefix('suratIzinBelajar')->group(function () {
	    Route::get('index','KepalaBagianController@index_surat_izin_belajar');
	    Route::get('print/{id}','KepalaBagianController@print_surat_izin_belajar'); 
	    Route::get('create/{id}','KepalaBagianController@create_surat_izin_belajar'); 
	    Route::post('store','KepalaBagianController@store_surat_izin_belajar');
	});
	
	Route::get('/cariPemohon/{nip}','AdminController@cari_berkas');
});

Route::group(['middleware' => ['auth', 'checkRole:2']], function(){
	
	Route::prefix('inputDataDiri')->group(function () {
	    Route::get('index','PemohonController@index_input_data_diri');
	    Route::get('create','PemohonController@create_input_data_diri'); 
	    Route::post('store','PemohonController@store_input_data_diri'); 
	    Route::get('edit/{id}','PemohonController@edit_input_data_diri');
	    Route::post('update/{id}','PemohonController@update_input_data_diri');
	    Route::get('delete/{id}','PemohonController@delete_input_data_diri');
	    Route::get('lihat/{id}','PemohonController@view_input_data_diri');
	});

	Route::prefix('inputBerkas')->group(function () {
	    Route::get('index','PemohonController@index_input_berkas');
	    Route::get('upload/{id}','PemohonController@input_input_berkas');
	    Route::post('save','PemohonController@save_input_berkas');
	    Route::get('view/{id}','PemohonController@view_input_berkas');
	});

	Route::prefix('trackingVerifikasi')->group(function () {
	    Route::get('index','PemohonController@index_tracking_verifikasi');
	});

	Route::prefix('cetakIdp')->group(function () {
	    Route::get('index','PemohonController@index_cetak_idp');
	});

});

Route::group(['middleware' => ['auth', 'checkRole:1,4']], function(){

	Route::prefix('validasi')->group(function () {
	    Route::get('index','KepalaBagianController@index_validasi_surat_izin_belajar');
	    Route::get('validasi/{id}','KepalaBagianController@validasi_surat_izin_belajar');
	    Route::get('cancel/{id}','KepalaBagianController@batal_validasi_surat_izin_belajar');
	    Route::get('delete/{id}','KepalaBagianController@delete_surat_izin_belajar');
	    Route::get('view/{id}','KepalaBagianController@view_surat_izin_belajar');
	});

});

Route::group(['middleware' => ['auth', 'checkRole:1,5']], function(){

	Route::prefix('idp')->group(function () {
	    Route::get('index','BinbangkumController@index_idp');
	    Route::get('print/{id}','BinbangkumController@print_idp'); 
	    Route::get('create/{id}','BinbangkumController@create_idp'); 
	    Route::post('store','BinbangkumController@store_idp');
	    Route::get('cancel/{id]','BinbangkumController@cancel_idp');
	});	

});

Auth::routes();