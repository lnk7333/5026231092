@extends('template')

@section('content')

    <script>
        function formValidation(){

            var merk = document.getElementById("merkminuman").value;
            var harga = document.getElementById("hargaminuman").value;
            var berat = document.getElementById("berat").value;

            if(merk.length <= 0){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Merk Minuman tidak boleh Kosong!",
                })
                return false;
            }

            else if(harga <= 0 ){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Masukkan Angka yang Valid untuk Harga",
                })
                return false;
            }

            else if(berat <= 0) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Masukkan Angka yang Valid untuk Berat",
                })
                return false;
            }

            else{
                Swal.fire({
                    title: "Berhasil!"
                })
                return true;
            }
        }
    </script>

    <h3>Data Minuman</h3>

	<a href="/minuman" class="btn btn-info">Kembali</a>

	<br/>
	<br/>

	<form action="/minuman/store" method="post" onsubmit="return formValidation();">
		{{ csrf_field() }}
        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Merk </label>
            </div>
            <div class="col-8">
                <input type="text" id="merkminuman" name="merkminuman" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Harga </label>
            </div>
            <div class="col-8">
                <input type="number" id="hargaminuman" name="hargaminuman" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Ketersediaan </label>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-2">
                        <input type="radio" id="tersedia_ya" name="tersedia" value="1">
                        <label for="tersedia_ya">Tersedia</label>
                    </div>
                    <div class="col-6">
                        <input type="radio" id="tersedia_tidak" name="tersedia" value="0">
                        <label for="tersedia_tidak">Tidak Tersedia</label>
                    </div>
                    <br/>
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Berat </label>
            </div>
            <div class="col-8">
                <input type="number" id="berat" step="0.01" name="berat" required="required" class="form-control"> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
        </div>
	</form>

@endsection
