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

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
