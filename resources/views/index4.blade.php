@extends('template')

@section('content')
    <script>
        function formValidation(){

            var cari = document.getElementById("find").value;

            if(cari.length <= 0){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Pencarian Tidak Boleh Kosong!",
                })
                return false;
            }

            else{
                Swal.fire({
                    icon: "success",
                    title: "Mencari!"
                })
                return true;
            }
        }
    </script>

	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>

    <p>Cari Data Karyawan :</p>
	<form action="/karyawan/cari" method="GET" onsubmit="return formValidation();">
		<input type="text" id="find" class="form-control" name="cari" placeholder="Cari Karyawan ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

    <br/>

	<table class="table table-striped">
		<tr>
			<th>Kode</th>
			<th>Nama Karyawan</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>&nbsp;</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ strtolower($p->departemen) }}</td>
            <td>&nbsp;</td>
			<td>
				<a href="/karyawan/edit/{{ $p->kodepegawai }}" class="btn btn-success">Edit</a>
				|
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{    $karyawan->links()    }}
@endsection
