<?php

use Illuminate\Support\Facades\Route;

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

// Route dashboard stisla
Route::get('/', function () {
    return view('dashboard.masterdashboard');
});

// Route tampil data 
Route::get('/read', 'ControllerMahasiswa@index');

// Route tambah data 
Route::get('/create', 'ControllerMahasiswa@create');

// Route simpan data
Route::post('/save', 'ControllerMahasiswa@save');

// Route edit data
Route::get('/edit/{id}', 'ControllerMahasiswa@edit');

// Route update data
Route::put('/update/{id}', 'ControllerMahasiswa@update');

// Route hapus data
Route::get('/delete/{id}','ControllerMahasiswa@delete');
