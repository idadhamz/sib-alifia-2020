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

	Route::get('/dataUser','AdminController@index_user');
	Route::get('/tambahData','AdminController@create');
	Route::post('/dataUser/create','AdminController@create_user');
	Route::get('/dataUser/edit/{id_user}','AdminController@edit_user');
	Route::post('/dataUser/update/{id_user}','AdminController@update_user');
	Route::get('/dataUser/delete/{id_user}','AdminController@delete_user');

});

Auth::routes();