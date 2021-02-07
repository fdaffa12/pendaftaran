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

Route::get('create-admin',function(){
    \DB::table('users')->insert([
        'level'=>'admin',
        'name'=>'admin',
        'nisn'=>'admin@admin',
        'email'=>'admin@admin.com',
        'id_registrasi'=>'-',
        'password'=>bcrypt('f1a7i1z0')
    ]);
});

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/daftar', 'PpdbController@index');
Route::post('ppdb', 'PpdbController@store');

Auth::routes();

//peserta
Route::get('dashboard', 'BerandaController@index');

Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('home');

//biodata peserta
Route::get('biodata-siswa', 'BiodataSiswaController@siswa');
Route::post('biodata-siswa/{users}', 'BiodataSiswaController@storeSiswa');
Route::put('biodata-siswa/{users}', 'BiodataSiswaController@updateSiswa');

//biodata Biodatawali
Route::get('biodata-wali', 'BiodataWaliController@wali');
//bapak
Route::post('biodata-bapak/{users}', 'BiodataWaliController@storeBapak');
Route::put('biodata-bapak/{users}', 'BiodataWaliController@updateBapak');
//ibu
Route::post('biodata-ibu/{users}', 'BiodataWaliController@storeIbu');
Route::put('biodata-ibu/{users}', 'BiodataWaliController@updateIbu');

//dokumen
Route::get('dokumen', 'DokumenController@index');
Route::post('dokumen/{users}', 'DokumenController@storeDokumen');
Route::put('dokumen/{users}', 'DokumenController@updateDokumen');

//Nilai
route::get('nilai', 'NilaiController@index');
Route::post('nilai/{users}', 'NilaiController@storeNilai');
Route::put('nilai/{users}', 'NilaiController@updateNilai');

//Admin Page

//Peserta
Route::get('peserta', 'Admin\PesertaController@index')->middleware('admin');
Route::get('peserta/details/{id}', 'Admin\PesertaController@detail')->middleware('admin');
Route::get('peserta/{id}/lulus','Admin\PesertaController@lulus')->middleware('admin');
Route::get('peserta/{id}/lulus-batal','Admin\PesertaController@lulusBatal')->middleware('admin');
Route::get('peserta/{id}/verifikasi','Admin\PesertaController@verifikasi')->middleware('admin');
Route::get('peserta/verifikasi', 'Admin\PesertaController@diverifikasi');
Route::get('peserta/melengkapi', 'Admin\PesertaController@melengkapi');
Route::get('peserta/belum-verifikasi', 'Admin\PesertaController@belum_verifikasi');
Route::get('peserta/{id}/verifikasi-batal','Admin\PesertaController@verifikasiBatal')->middleware('admin');
Route::get('peserta-nilai/{id}/verifikasinilai-batal','Admin\PesertaController@verifikasiNilaiBatal')->middleware('admin');
Route::put('peserta/{id}', 'Admin\PesertaController@verifikasiNilai')->middleware('admin');
Route::get('peserta-delete/{id}', 'Admin\PesertaController@delete')->middleware('admin');
Route::get('peserta-edit/{id}', 'Admin\PesertaController@edit')->middleware('admin');
Route::put('peserta-update/{id}','Admin\PesertaController@updatePeserta')->middleware('admin');

//Data Nilai
Route::get('data-nilai', 'Admin\NilaiController@index')->middleware('admin');

Route::get('keluar',function(){
    \Auth::logout();
    return redirect('/');
});
