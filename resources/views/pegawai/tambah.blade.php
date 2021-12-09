@extends('layout.bahagia')

@section('title', 'Menambah Data Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div>
            Nama <br> <input type="text" class="form-control" name="nama" required="required"> <br/>
        </div>
        <div>
            Jabatan <br> <input type="text" class="form-control" name="jabatan" required="required"> <br/>
        </div>
        <div>
            Umur <br> <input type="number" class="form-control" name="umur" required="required"> <br/>
        </div>
        <div>
            Alamat <br> <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
	</form>
@endsection
