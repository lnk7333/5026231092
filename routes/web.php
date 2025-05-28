<?php

use Illuminate\Support\Facades\Route;

// ====================== IMPORT CONTROLLER =======================
use App\Http\Controllers\Link;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    $nama ='Fawwaz 092';
    return view('welcome', ['siapa' => $nama]);
});

Route::get('/assalamualaikum', function () {
    return 'Waalaikumsalam';
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/hello', [Link::class, 'helloWorld']);

// =============== TUGAS 1 ====================

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/kalkulator', function () {
    return view('js1');
});

Route::get('/pendaftaran-ise', function () {
    return view('js2');
});

// ================= 21/05/2025 ======================

//Route::get('/dosen', [Link::class,'index']);
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class,'index']);

// ROUTE FORMULIR
//Route::get('/formulir', [Pegawai2Controller::class,'formulir']);
//Route::post('/formulir/proses', [Pegawai2Controller::class,'proses']);

// ROUTE BLOG
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//route CRUD
Route::get('/pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
