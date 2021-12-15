@extends('layout.bahagia')

@section('title', 'Menambah Data Nilai Kuliah')
@section('judulhalaman', 'Tambah Data Nilai')

@section('konten')

	<a href="/nilai">Kembali</a>

	<br/>
	<br/>

	<form action="/nilai/store" method="post">
		{{ csrf_field() }}
        <div>
            NRP <br>
            <input type="text" class="form-control" name="NRP" id="NRP" required="required" pattern="^[0-9]{6}$" placeholder="Nomor Registrasi Pokok"> <br/>
        </div>
        <div>
            Nilai Angka <br>
            <input type="text" class="form-control" name="NilaiAngka" id="NilaiAngka" required="required" pattern="^[0-9]*$" placeholder="0 - 100"> <br/>
        </div>
        <div>
            SKS <br>
            <input type="text" class="form-control" name="SKS" id="SKS" required="required" pattern="^[0-9]*$" placeholder="Jumlah SKS"> <br/>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
	</form>

@endsection
