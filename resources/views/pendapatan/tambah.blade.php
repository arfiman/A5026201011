@extends('layout.bahagia')

@section('title', 'Menambah Data Pendapatan')
@section('judulhalaman', 'Tambah Data Pendapatan')

@section('konten')
	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
        <div>
            ID Pegawai <br> <input type="number" name="IDPegawai" required="required"> <br/>
        </div>
        <div>
            Bulan <br> <input type="number" name="Bulan" required="required"> <br/>
        </div>
        <div>
            Tahun <br> <input type="text" name="Tahun" required="required" pattern="[0-9]{4}"> <br/>
        </div>
        <div>
            Gaji <br> <input type="number" name="Gaji" required="required"> <br/>
        </div>
        <div>
            Tunjangan <br> <input type="number" name="Tunjangan" required="required"> <br/>
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
@endsection
