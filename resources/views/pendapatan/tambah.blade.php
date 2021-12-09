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
            ID Pegawai <br>
            <select class="form-control" name="IDPegawai" id="">
                @foreach($pegawai as $pg)
                <option value="{{ $pg -> pegawai_id }}">{{ $pg -> pegawai_nama }}</option>
                @endforeach
            </select>
            <br>
        </div>
        <div>
            Bulan <br> <input type="number" class="form-control" name="Bulan" required="required"> <br/>
        </div>
        <div>
            Tahun <br> <input type="text" class="form-control" name="Tahun" required="required" pattern="[0-9]{4}"> <br/>
        </div>
        <div>
            Gaji <br> <input type="number" class="form-control" name="Gaji" required="required"> <br/>
        </div>
        <div>
            Tunjangan <br> <input type="number" class="form-control" name="Tunjangan" required="required"> <br/>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
	</form>
@endsection
