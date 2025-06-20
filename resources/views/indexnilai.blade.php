@extends('template')

@section('content')

	<h3>Data Nilai</h3>

	<a href="/eas/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>

    {{-- <p>Cari Data Nilai :</p>
	<form action="/nilai/cari" method="GET" onsubmit="return formValidation();">
		<input type="text" id="find" class="form-control" name="cari" placeholder="Cari Nilai ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form> --}}

    <br/>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilai as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nomorinduksiswa }}</td>
			<td>{{ $p->nilaiangka }}</td>
            <td>{{ $p->sks }}</td>
            <td>@if($p->nilaiangka <= 40)
                    D
                @elseif (($p->nilaiangka > 40) & ($p->nilaiangka <= 60))
                    C
                @elseif (($p->nilaiangka > 60) & ($p->nilaiangka <= 80))
                    B
                @else
                    A
                @endif
            </td>
            <td>
                {{$p->nilaiangka*$p->sks}}
            </td>
			{{-- <td>
				<a href="/eas/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/eas/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
{{    $nilai->links()    }}
@endsection
