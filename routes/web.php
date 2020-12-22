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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'materi_internet'], function(){
    Route::get('/',function(){
        return view('materi/internet');
    })->name('internet');
    Route::get('/sejarah_internet',function(){
        return view('materi/sejarah_internet');
    })->name('sejarah_internet');

    Route::get('/manfaat_internet',function(){
        return view('materi/manfaat_internet');
    })->name('manfaat_internet');

    Route::get('/dampak_internet',function(){
        return view('materi/dampak_internet');
    })->name('dampak_internet');
});

Route::group(['prefix' => 'materi_intranet'], function(){
    Route::get('/',function(){
        return view('materi/intranet/intranet');
    })->name('intranet');
    Route::get('/sejarah_intranet',function(){
        return view('materi/intranet/sejarah_intranet');
    })->name('sejarah_intranet');

    Route::get('/kelebihan_intranet',function(){
        return view('materi/intranet/kelebihan_intranet');
    })->name('kelebihan_intranet');

    Route::get('/kekurangan_intranet',function(){
        return view('materi/intranet/kekurangan_intranet');
    })->name('kekurangan_intranet');
});

Route::get('/contoh_dan_perbedaan_antara_internet_dan_intranet', function () {
    return view('materi/contoh');
})->name('contoh');

Route::get('/daftar_pustaka', function () {
    return view('materi/dapus');
})->name('dapus');

Route::get('/latihan_soal','LatihanController@index')->name('latihan');
Route::post('/latihan_soal','LatihanController@post')->name('latihan.simpan');
