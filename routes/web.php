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

// Route::get('/dataAkun','akunController@index_akun');

Route::group(['middleware' => ['auth', 'checkRole:1,2,3,4']], function(){

	// Dashboard
	Route::get('/dashboard','DashboardController@index');
	// Route::get('/dataAkun','akunController@index_akun');

	// Route::get('/dataUser','AdminController@index_user');
	// Route::get('/tambahData','AdminController@create');
	// Route::post('/dataUser/create','AdminController@create_user');
	// Route::get('/dataUser/edit/{id_user}','AdminController@edit_user');
	// Route::post('/dataUser/update/{id_user}','AdminController@update_user');
	// Route::get('/dataUser/delete/{id_user}','AdminController@delete_user');

});

Route::group(['middleware' => ['auth', 'checkRole:1']], function(){

	Route::get('/dataUser','AdminController@index_user');
	Route::get('/tambahDataUser','AdminController@create');
	Route::post('/dataUser/create','AdminController@create_user');
	Route::get('/dataUser/edit/{id_user}','AdminController@edit_user');
	Route::post('/dataUser/update/{id_user}','AdminController@update_user');
	Route::get('/dataUser/delete/{id_user}','AdminController@delete_user');

});

Route::group(['middleware' => ['auth', 'checkRole:3']], function(){

	Route::get('/dataAkun','AkuntanController@index_akun');
	Route::get('/tambahDataAkun','AkuntanController@add_akun');
	Route::post('/dataAkun/create','AkuntanController@create_akun');
	Route::get('/dataAkun/edit/{id}','AkuntanController@edit_akun');
	Route::post('/dataAkun/update/{id}','AkuntanController@update_akun');
	Route::get('/dataAkun/delete/{id}','AkuntanController@delete_akun');

	Route::get('/dataGolAkun','AkuntanController@index_gol_akun');
	Route::get('/tambahDataGolAkun','AkuntanController@add_gol_akun');
	Route::post('/dataGolAkun/create','AkuntanController@create_gol_akun');
	Route::get('/dataGolAkun/edit/{kode_golongan}','AkuntanController@edit_gol_akun');
	Route::post('/dataGolAkun/update/{kode_golongan}','AkuntanController@update_gol_akun');
	Route::get('/dataGolAkun/delete/{kode_golongan}','AkuntanController@delete_gol_akun');

	Route::get('/dataTransaksi','AkuntanController@index_transaksi');

});

Auth::routes();