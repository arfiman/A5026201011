@extends('layout.bahagia')

@section('title', 'Mengedit Data Pendapatan')
@section('judulhalaman', 'Edit Pendapatan Pegawai')

@section('konten')
	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>

        <div>
            ID Pegawai <br> <input type="number" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
        </div>
        <div>
            Bulan <br> <input type="number" name="Bulan" required="required" value="{{ $p->Bulan }}"> <br/>
        </div>
        <div>
            Tahun <br> <input type="text" name="Tahun" required="required" pattern="[0-9]{4}" value="{{ $p->Tahun }}"> <br/>
        </div>
        <div>
            Gaji <br> <input type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
        </div>
        <div>
            Tunjangan <br> <input type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}"> <br/>
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
@endsection
