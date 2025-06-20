<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->paginate(10);

        $totalKeseluruhan = DB::table('keranjangbelanja')
            ->select(DB::raw('SUM(Jumlah * Harga) as total'))
            ->first()->total;

        return view('indexkeranjangbelanja', [
            'keranjang' => $keranjang,
            'totalKeseluruhan' => $totalKeseluruhan
        ]);
    }


    public function tambah1()
    {
        return view('tambahkeranjangbelanja');
    }

    public function store1(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);

        return redirect('/keranjang');
    }

    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang');
    }
}
