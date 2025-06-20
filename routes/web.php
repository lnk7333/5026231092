<?php

use Illuminate\Support\Facades\Route;

// ====================== IMPORT CONTROLLER =======================
use App\Http\Controllers\Link;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangController;

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

Route::get('/2template', function () {
    return view('2template');
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
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);

// TUGAS CRUD  PER ANAK
Route::get('/minuman',[MinumanController::class, 'index']);
Route::get('/minuman/tambah',[MinumanController::class, 'tambah']);
Route::post('/minuman/store',[MinumanController::class, 'store']);
Route::get('/minuman/edit/{id}',[MinumanController::class, 'edit']);
Route::post('/minuman/update',[MinumanController::class, 'update']);
Route::get('/minuman/hapus/{id}',[MinumanController::class, 'hapus']);
Route::get('/minuman/cari',[MinumanController::class, 'cari']);

// TUGAS CRUD LATIHAN EAS
Route::get('/karyawan',[KaryawanController::class, 'index']);
Route::get('/karyawan/tambah',[KaryawanController::class, 'tambah']);
Route::post('/karyawan/store',[KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class, 'edit']);
Route::post('/karyawan/update',[KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari',[KaryawanController::class, 'cari']);

// TUGAS CRUD LATIHAN EAS PEREMPUAN
Route::get('/keranjang', [KeranjangController::class, 'index']);
Route::get('/keranjang/tambah', [KeranjangController::class, 'tambah1']);
Route::post('/keranjang/store', [KeranjangController::class, 'store1']);
Route::get('/keranjang/hapus/{id}', [KeranjangController::class, 'hapus1']);
