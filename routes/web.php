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
    return view('welcome');
});

// Tugas 4
Route::get('tugas4', function () {
    return view('tgs4');
});

//Praktikum 2
Route::get('praktikum2', function () {
    return view('prak2');
});

// Contoh
// Route::get('isiannama',"ViewController@showForm") ;
// Route::post('greetings',"ViewController@resultGreetings");

//ETS
Route::get('ets', 'ViewController@showETS');

//Tugas PHP
Route::get('tgsphp', 'ViewController@showtugasPHP');
Route::get('generatefibo', 'ViewController@generatefibo');

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD pendapatan
Route::get('/pendapatan', 'PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');


//Route CRUD Mobil
Route::get('/mobil','MobilController@index');
Route::get('/mobil/add','MobilController@add');
Route::post('/mobil/store','MobilController@store');
Route::get('/mobil/edit/{id}','MobilController@edit');
Route::post('/mobil/update','MobilController@update');
Route::get('/mobil/hapus/{id}','MobilController@hapus');
Route::get('/mobil/cari','MobilController@cari');
Route::get('/mobil/view/{id}','MobilController@detail');
