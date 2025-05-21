<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($nama){
        $omaga = $nama;
    	return '<h1>' . $omaga . '</h1>';
    }

    public function formulir(){
    	return view('formulir');
    }

    public function proses(Request $request){ //ARRAY JAWABAN DARI POST
        $nama = $request->input('nama'); //PARSE VARIABEL NAME
     	$pin = $request->input('pin');  //PARSE VARIABEL ALAMAT
        return "Nama : " . $nama . "<br>" . "Pin : " . $pin . "<br> Aslinya : " . $request;
    }
}
