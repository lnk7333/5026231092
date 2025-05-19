<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;

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
