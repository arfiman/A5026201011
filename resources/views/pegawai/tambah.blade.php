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
            Nama <br> <input type="text" name="nama" required="required"> <br/>
        </div>
        <div>
            Jabatan <br> <input type="text" name="jabatan" required="required"> <br/>
        </div>
        <div>
            Umur <br> <input type="number" name="umur" required="required"> <br/>
        </div>
        <div>
            Alamat <br> <textarea name="alamat" required="required"></textarea> <br/>
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
@endsection
