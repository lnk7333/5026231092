@extends('template')

@section('content')

    <script>
        function formValidation(){

            var kode = document.getElementById("kodepegawai").value;
            var nama = document.getElementById("namalengkap").value;
            var divisi = document.getElementById("divisi").value;
            var departemen = document.getElementById("departemen").value;

            if((kode.length < 5 || kode.length > 5)){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Kode harus memiliki 5 digit!",
                })
                return false;
            }

            else if((nama.length == 0) || /\d/.test(nama)){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Nama Tidak Boleh Kosong atau Mengandung Angka!",
                })
                return false;
            }

            else if(divisi.length > 5){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Divisi tidak boleh melebihi 5 Digit!",
                })
                return false;
            }

            else if(departemen.length > 5){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Departemen tidak boleh melebihi 10 Digit!",
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

    <h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info">Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" onsubmit="return formValidation();">
		{{ csrf_field() }}
        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Kode </label>
            </div>
            <div class="col-8">
                <input type="text" id="kodepegawai" name="kodepegawai" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Nama Karyawan </label>
            </div>
            <div class="col-8">
                <input type="text" id="namalengkap" name="namalengkap" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Divisi </label>
            </div>
            <div class="col-8">
                <input type="text" id="divisi" name="divisi" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Departemen </label>
            </div>
            <div class="col-8">
                <input type="text" id="departemen" name="departemen" required="required" class="form-control"> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
        </div>
	</form>

@endsection
