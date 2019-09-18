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

//siswa
Route::get('/', 'pagescontroller@homepage');
Route::get('home', 'pagescontroller@homepage');
Route::get('about', 'pagescontroller@about');
Route::get('siswa', 'siswacontroller@siswa');
Route::get('register', 'pagescontroller@register');
Route::get('navbar', 'pagescontroller@navbar');
Route::get('siswa/cetak_pdf', 'siswacontroller@cetak');
Route::get('siswa/create', 'siswacontroller@create');
Route::post('siswa', 'siswacontroller@store');
Route::get('siswa/{siswa}', 'siswacontroller@show');
Route::get('siswa/{siswa}/edit', 'siswacontroller@edit');
Route::post('siswa/{siswa}/update', 'siswacontroller@update');
Route::get('siswa/{siswa}/delete', 'siswacontroller@delete');
Route::get('/siswa/{id}/profile', 'siswacontroller@profile');

//guru
Route::get('guru', 'gurucontroller@guru');
Route::get('createGuru', 'gurucontroller@createGuru');
Route::post('guru', 'gurucontroller@store');
Route::get('guru/{guru}/edit', 'gurucontroller@edit');
Route::post('guru/{guru}/update', 'gurucontroller@update');
Route::get('guru/{guru}/deleteGuru', 'gurucontroller@deleteGuru');
Route::get('/guru/profile', 'gurucontroller@profile');
Route::get('guru/{guru}', 'gurucontroller@showGuru');

//kelas
Route::get('kelas', 'kelascontroller@kelas');
Route::get('create', 'kelascontroller@create');
Route::post('kelas', 'kelascontroller@store');
Route::get('kelas/{kelas}', 'kelascontroller@show');
Route::get('kelas/{kelas}/edit', 'kelascontroller@edit');
Route::post('kelas/{kelas}/update', 'kelascontroller@update');




//walikelas
Route::get('walikelas', 'walikelascontroller@walikelas');
Route::post('walikelas', 'walikelascontroller@storeWali');
Route::get('createWaliKelas', 'walikelascontroller@createWaliKelas');
Route::get('walikelas/{walikelas}', 'walikelascontroller@show');
Route::get('walikelas/{walikelas}/edit', 'walikelascontroller@edit');
Route::post('walikelas/{walikelas}/updatewali', 'walikelascontroller@updatewali');
Route::get('walikelas/{walikelas}/deletewali', 'walikelascontroller@deletewali');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
