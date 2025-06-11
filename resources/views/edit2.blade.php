@extends('template')

@section('content')

	<h3>Edit Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		Kode <input type="text" required="required" name="kodepegawai" value="{{ $p->kodepegawai }}"> <br/>
		Nama Lengkap <input type="text" required="required" name="namalengkap" value="{{ $p->namalengkap }}"> <br/>
		Divisi <input type="text" required="required" name="divisi" value="{{ $p->divisi }}"> <br/>
		Departemen <input type="text" required="required" name="departemen" value="{{ $p->departemen }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
