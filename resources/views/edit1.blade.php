<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Minuman</h3>

	<a href="/minuman"> Kembali</a>

	<br/>
	<br/>

	@foreach($minuman as $p)
	<form action="/minuman/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		Merk Minuman <input type="text" required="required" name="merkminuman" value="{{ $p->merkminuman }}"> <br/>
		Harga <input type="number" required="required" name="hargaminuman" value="{{ $p->hargaminuman }}"> <br/>
		Ketersediaan
            <input type="radio" id="tersedia_ya" name="tersedia" value="1" {{ $p->tersedia == 1 ? 'checked' : '' }}>
            <label for="tersedia_ya">Tersedia</label>
            <input type="radio" id="tersedia_tidak" name="tersedia" value="0" {{ $p->tersedia == 0 ? 'checked' : '' }}>
            <label for="tersedia_tidak">Tidak Tersedia</label> <br/>
		Berat <input type="number" step="0.01" required="required" name="berat" value="{{ $p->berat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>
