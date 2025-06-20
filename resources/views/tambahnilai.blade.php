@extends('template')

@section('content')

    <script>
        function formValidation(){

            var nrp = document.getElementById("nrp").value;
            var nilai = document.getElementById("nilai").value;
            var sks = document.getElementById("sks").value;

            if((nrp.length < 10) || nrp.length > 10) || /[a-zA-Z]/.test(nrp){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "NRP harus memiliki 10 digit dan tidak mengandung huruf!",
                })
                return false;
            }

            else if((nilai.length == 0) || /[a-zA-Z]/.test(nilai)){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Nilai tidak boleh kosong dan mengandung huruf!",
                })
                return false;
            }

            else if((nilai < 0) || (nilai > 100)){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Nilai harus di antara 0-100!",
                })
                return false;
            }

            else if((sks.length == 0) || /[a-zA-Z]/.test(sks)){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "SKS tidak boleh kosong dan mengandung huruf!",
                })
                return false;
            }

            else if((sks <= 0) || (sks >= 8)){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "SKS harus berada di antara angka 1-8!",
                })
                return false;
            }

            else{
                Swal.fire({
                    title: "Berhasil Menginput Nilai!"
                })
                return true;
            }
        }
    </script>

    <h3>Data Nilai</h3>

	<a href="/eas" class="btn btn-info">Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post" onsubmit="return formValidation();">
		{{ csrf_field() }}

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> NRP </label>
            </div>
            <div class="col-8">
                <input type="textfield" id="nrp" name="nomorinduksiswa" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Nilai </label>
            </div>
            <div class="col-8">
                <input type="textfield" id="nilai" name="nilaiangka" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> SKS </label>
            </div>
            <div class="col-8">
                <input type="textfield" id="sks" name="sks" required="required" class="form-control"> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
        </div>
	</form>

@endsection
