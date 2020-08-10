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
    return view('Home');
});



//Profile
Route::get('/dosen', function () {
    return view('Profile/dosen');
});

Route::get('/prestasi', function () {
    return view('Profile/prestasi');
});

Route::get('/sejarah', function () {
    return view('Profile/sejarah');
});


Route::get('/visimisi', function () {
    return view('Profile/visimisi');
});

Route::get('/struktur', function () {
    return view('Profile/struktur');
});


//Bidang Keahlian
Route::get('/bk', function () {
    return view('BK/bidangkeahlian');
});

//Akreditasi
Route::get('/akreditasi', function () {
    return view('Akademik/akreditasi');
});

Route::get('/jadwalkuliah', function () {
    return view('Akademik/jadwalkuliah');
});

Route::get('/mahasiswa', function () {
    return view('Akademik/mahasiswa');
});

Route::get('/kalender', function () {
    return view('Akademik/kalender');
});


//Kemahasiswaan
Route::get('/alumni', function () {
    return view('Kemahasiswaan/alumni');
});

Route::get('/kegiatan', function () {
    return view('Kemahasiswaan/kegiatan');
});

Route::get('/loker', function () {
    return view('Kemahasiswaan/loker');
});

Route::get('/organisasi', function () {
    return view('Kemahasiswaan/organisasi');
});


//Kemahasiswaan
Route::get('/penelitian', function () {
    return view('Riset/penelitian');
});

Route::get('/pengabdian', function () {
    return view('Riset/pengabdian');
});

Route::get('/profilepeneliti', function () {
    return view('Riset/profilepeneliti');
});

//Kemahasiswaan
Route::get('/fasilitas', function () {
    return view('Fasilitas/fasilitas');
});


