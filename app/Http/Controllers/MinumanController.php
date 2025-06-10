<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MinumanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table minuman
		$minuman = DB::table('minuman')->paginate(10);

    	// mengirim data minuman ke view index
		return view('index3',['minuman' => $minuman]);

	}

	// method untuk menampilkan view form tambah minuman
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah1');

	}

	// method untuk insert data ke table minuman
	public function store(Request $request)
	{
		// insert data ke table minuman
		DB::table('minuman')->insert([
			'merkminuman' => $request->merkminuman,
			'hargaminuman' => $request->hargaminuman,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman minuman
		return redirect('/minuman');

	}

	// method untuk edit data minuman
	public function edit($id)
	{
		// mengambil data minuman berdasarkan id yang dipilih
		$minuman = DB::table('minuman')->where('ID',$id)->get();
		// passing data minuman yang didapat ke view edit.blade.php
		return view('edit1',['minuman' => $minuman]);

	}

	// update data minuman
	public function update(Request $request)
	{
		// update data minuman
		DB::table('minuman')->where('ID',$request->id)->update([
			'merkminuman' => $request->merkminuman,
			'hargaminuman' => $request->hargaminuman,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman minuman
		return redirect('/minuman');
	}

	// method untuk hapus data minuman
	public function hapus($id)
	{
		// menghapus data minuman berdasarkan id yang dipilih
		DB::table('minuman')->where('ID',$id)->delete();

		// alihkan halaman ke halaman minuman
		return redirect('/minuman');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table minuman sesuai pencarian data
		$minuman = DB::table('minuman')
		->where('merkminuman','like',"%".$cari."%")
		->paginate();

    		// mengirim data minuman ke view index
		return view('index3',['minuman' => $minuman,'cari' => $cari]);

	}
}
