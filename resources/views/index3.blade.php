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

	<h3>Data Minuman</h3>

	<a href="/minuman/tambah" class="btn btn-primary"> + Tambah Minuman Baru</a>

    <p>Cari Data Minuman :</p>
	<form action="/minuman/cari" method="GET" onsubmit="return formValidation();">
		<input type="text" id="find" class="form-control" name="cari" placeholder="Cari Minuman ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

    <br/>

	<table class="table table-striped">
		<tr>
			<th>Merk Minuman</th>
			<th>Harga</th>
			<th>Ketersediaan</th>
			<th>Berat</th>
            <th>&nbsp;</th>
			<th>Opsi</th>
		</tr>
		@foreach($minuman as $p)
		<tr>
			<td>{{ $p->merkminuman }}</td>
			<td>{{ $p->hargaminuman }}</td>
			<td>
                @if($p->tersedia == 1)
                    Tersedia
                @else
                    Tidak Tersedia
                @endif
            </td>
			<td>{{ $p->berat }}</td>
            <td>&nbsp;</td>
			<td>
				<a href="/minuman/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/minuman/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{    $minuman->links()    }}
@endsection
