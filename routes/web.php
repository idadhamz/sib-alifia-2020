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


Route::group(['middleware' => ['auth', 'checkRole:1,2,3,4']], function(){

	// Dashboard
	Route::get('/dashboard','DashboardController@index');

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
	    Route::get('delete/{id}','AdminController@delete_data_diri');
	    Route::get('lihat/{id}','AdminController@view_data_diri');
	});

	Route::prefix('uploadBerkas')->group(function () {
	    Route::get('index','AdminController@index_upload_berkas');
	    Route::get('upload/{id}','AdminController@upload_upload_berkas');
	    Route::post('save','AdminController@save_upload_berkas');
	    Route::get('view/{id}','AdminController@view_upload_berkas');
	});

});

Route::group(['middleware' => ['auth', 'checkRole:2']], function(){

	

});

Route::group(['middleware' => ['auth', 'checkRole:3']], function(){

	

});

Route::group(['middleware' => ['auth', 'checkRole:4']], function(){

	

});

Auth::routes();