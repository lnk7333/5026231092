<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    public function helloWorld(){
        return view('blog');
    }

    public function index(){
        $nama = "Muhammad Fawwaz Al-Amien";
        $umur = 19;
        $alamat = "Surabaya";
        $pelajaran = ["PWEB","KDK","DMJK","PAP1","DPP"];

    	return view('biodata',['nama' => $nama , 'usia' => $umur , 'alamat' => $alamat , 'matkul' => $pelajaran]);
    }
}
