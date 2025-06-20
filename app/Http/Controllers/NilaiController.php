<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
        {
            // mengambil data dari table karyawan
            $nilai = DB::table('nilai')->paginate(10);

            // mengirim data karyawan ke view index
            return view('indexnilai',['nilai' => $nilai]);

        }

    public function tambah()
	    {

            // memanggil view tambah
            return view('tambahnilai');

	    }

    public function store(Request $request)
	{
		// insert data ke table nilai
		DB::table('nilai')->insert([
			'nomorinduksiswa' => $request->nomorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks
		]);
		// alihkan halaman ke halamaneas
		return redirect('/eas');
	}
}
