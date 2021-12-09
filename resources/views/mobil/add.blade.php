@extends('layout.bahagia')

@section('title', 'Menambah Data Mobil')
@section('judulhalaman', 'Tambah Mobil')

@section('konten')

	<a href="/mobil">Kembali</a>

	<br/>
	<br/>

	<form action="/mobil/store" method="post">
		{{ csrf_field() }}
        <div>
            Merk Mobil <br> <input type="text" class="form-control" name="merkmobil" required="required"> <br/>
        </div>
        <div>
            Stock Mobil <br> <input type="number" class="form-control" name="stockmobil" required="required"> <br/>
        </div>
        <div>
            <label class="btn btn-default">
                <input type="checkbox" name="tersedia"> Tersedia
            </label>
            <br>
            <br>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
	</form>
@endsection
