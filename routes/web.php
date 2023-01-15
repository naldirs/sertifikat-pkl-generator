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

//siswa function tambah,edit,delete dari nilai umum
Route::get('/siswa/{siswa}/tambah/nilai/umum','nilaiumumController@create')->name('tambah.nilai.umum');
Route::post('/siswa/{siswa}/simpan/nilai/umum','nilaiumumController@store')->name('simpan.nilai.umum');
// Route::get('/siswa/{siswa}/edit/nilai/umum','nilaiumumController@edit')->name('edit.nilai.umum');
Route::post('/siswa{siswa}/update/nilai/umum','nilaiumumController@update')->name('update.nilai.umum');

//siswa function tambah,edit,delete dari nilai keahlian
Route::post('/siswa/{siswa}/simpan/nilai/keahlian','nilaikeahlianController@store')->name('simpan.nilai.keahlian');
Route::post('/siswa/update/nilai/keahlian','nilaikeahlianController@update')->name('update.nilai.keahlian');
Route::get('/delete/nilaikeahlian/{nilai_keahlian}', 'nilaikeahlianController@destroy')->name('delete.nilai.keahlian');

//siswa function liat, edit, tambah, delete
Route::get('/', 'SiswaController@show')->name('home');
Route::get('/home', 'SiswaController@show')->name('home');
Route::get('/siswa/{siswa}', 'SiswaController@detail')->name('detail.siswa');
Route::get('/tambah/siswa', 'SiswaController@create')->name('tambah.siswa');
Route::post('/simpan/siswa', 'SiswaController@store')->name('simpan.siswa');
Route::get('/edit/siswa/{siswa}', 'SiswaController@edit')->name('edit.siswa');
Route::post('/update/siswa/{siswa}', 'SiswaController@update')->name('update.siswa');
Route::get('/delete/siswa/{siswa}', 'SiswaController@destroy')->name('delete.siswa');

//userlist
Route::get('/user' , 'UserController@show')->name('user.list');

//print sertifikat
Route::get('/siswa/{siswa}/cetak', 'SiswaController@printnilai')->name('cetak');
//pencarian di daftaruser
Route::get('/home/cari', 'PencarianController@filter')->name('cari');


//user function register, update, delete
Route::post('/register', 'UserController@create')->name('register');
Route::post('/update/user' , 'UserController@update')->name('update.user');
Route::get('user/delete/{id}', 'UserController@destroy')->name('delete.user');

//template show
Route::get('/template','templateController@show')->name('template');
Route::get('/template/signpage', 'templateController@ks')->name('ks');
Route::get('/template/border', 'templateController@border')->name('border');
Route::get('/template/preview', 'templateController@preview')->name('preview');


//template tambah sign page depan
Route::get('/template/editsignpagedepan','templateController@enditpagedepan')->name('edit.pagedepan');
Route::post('/template/updatepagedepan' , 'templateController@updatepagedepan')->name('update.pagedepan');

//template tambah sign page belakang
Route::get('/template/editsignpagebelakang','templateController@enditpagebelakang')->name('edit.pagebelakang');
Route::post('/template/updatepagebelakang' ,'templateController@updatepagebelakang')->name('update.pagebelakang');


//autentikasi
 Auth::routes();
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

