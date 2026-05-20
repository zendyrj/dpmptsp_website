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

//======================================Bagian Depan=======================================//
Route::get('/', 'IndexDepanController@index');
// Berita-----------------------------------------------------------------------------------
Route::get('/berita', 'PageController@indexberita'); //tanpilan list berita
Route::get('/berita/{x}', 'PageController@detailberita'); //tampilan detil berita
// Informasi--------------------------------------------------------------------------------
Route::get('/informasi', 'PageController@indexinformasi'); //tampilan list informasi
Route::get('/informasi/{x}', 'PageController@detailinformasi'); //tampilan detil informasi
// Tampilan detil halaman menu utama -------------------------------------------------------
Route::get('/halaman/{x}', 'PageController@halaman');
Route::get('/pengaduan-ajax', 'PageController@ajax');
Route::post('/pengaduan-ajax', 'PageController@ajax');
Route::get('/pengaduan-balasan', 'PageController@balasan');
Route::post('/pengaduan-balasan', 'PageController@balasan');
//===================================Akhir Bagian Depan====================================//
Route::get('/alur-layanan-pengaduan', 'PageController@alurpengaduan');
Route::get('/pejabat-penanganan-pengaduan', 'PageController@pejabat');
Route::get('/pengaduan-dpmptsp', 'PageController@indexpengaduan');
Route::post('/pengaduan-dpmptsp', 'PageController@storepengaduan');

Route::get('/ab', function () {
    return view('depan.blog_list');
});

//===================================Bagian Administrasi===================================//
//Auth::routes();
Route::get('/webmin', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/webmin', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth','level:1']], function(){
	Route::get('/panel', 'HomeController@index');
	Route::resource('/panel/pengguna', 'UserController');
	Route::resource('/panel/berita', 'PostController');
	Route::resource('/panel/info', 'InfoController');
	Route::resource('/panel/menu', 'MainmenuController');
	Route::resource('/panel/pengaduan', 'PengaduanController');

	Route::get('/panel/sosmed/{x}','SosmedController@edit');
	Route::put('/panel/sosmed/{x}','SosmedController@update');
	Route::get('/panel/pengaturan','AlamatController@index');
	Route::put('/panel/pengaturan1/{x}','AlamatController@update1');
	Route::put('/panel/pengaturan2/{x}','AlamatController@update2');
	Route::get('/panel/lokasi','MapController@index');
	Route::put('/panel/lokasi/{x}','MapController@update');
	Route::get('/panel/slider', 'SliderController@index');
	Route::post('/panel/slider', 'SliderController@store');
	Route::delete('/panel/slider/{x}', 'SliderController@destroy');
	Route::get('/panel/pengaduan/balas/{x}','PengaduanController@balas');
	Route::get('/panel/pengaduan/edit/{x}','PengaduanController@edit');
	Route::post('/pengaduan-form','PengaduanController@tambah');
	Route::post('/pengaduan-edit','PengaduanController@update');

});
//===============================Akhir Bagian Administrasi=================================//

Route::get('/webmin', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/webmin', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth','level:2']], function(){
	Route::get('/panel', 'HomeController@index');
	Route::resource('/panel/berita', 'PostController');
	Route::resource('/panel/info', 'InfoController');
	return redirect('/panel');
});