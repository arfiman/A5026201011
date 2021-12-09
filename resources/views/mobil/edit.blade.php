@extends('layout.bahagia')

@section('title', 'Mengedit Data Mobil')
@section('judulhalaman', 'Edit Mobil')

@section('konten')

	<a href="/mobil">Kembali</a>

	<br/>
	<br/>
    @foreach($mobil as $m)
	<form action="/mobil/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodemobil" value="{{ $m->kodemobil }}">
        <div>
            Merk Mobil <br>
            <input type="text" class="form-control" name="merkmobil" required="required" value="{{ $m->merkmobil }}"> <br/>
        </div>
        <div>
            Stock Mobil <br> <input type="number" class="form-control" name="stockmobil" required="required" value="{{ $m->stockmobil }}"> <br/>
        </div>
        <div>
            <label class="btn btn-default">
                <input type="checkbox" name="tersedia" @if ($m->tersedia === "Y" ) checked="checked" @endif> Tersedia
            </label>
            <br>
            <br>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
	</form>
    @endforeach
@endsection
