@extends('template')More actions

@section('content')
    <h3>Beli Barang</h3>
    <a href="/keranjang">Kembali ke Index</a>
    <br/><br/>

    <form action="/keranjang/store" method="post">
        {{ csrf_field() }}
        Kode Barang <input type="number" name="kodebarang" required> <br/>
        Jumlah <input type="number" name="jumlah" required> <br/>
        Harga <input type="number" name="harga" required> <br/>
        <input type="submit" value="Beli">
    </form>

@endsection
