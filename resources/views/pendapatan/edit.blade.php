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
            ID Pegawai <br>
            <select class="form-control" name="IDPegawai">
                @foreach($pegawai as $pg)
                <option value="{{ $pg->pegawai_id }}" @if ($pg->pegawai_id === $p->IDPegawai ) selected="selected" @endif>{{ $pg->pegawai_nama }}</option>
                @endforeach
            </select>
            <br>
        </div>
        <div>
            Bulan <br> <input type="number" class="form-control" name="Bulan" required="required" value="{{ $p->Bulan }}"> <br/>
        </div>
        <div>
            Tahun <br> <input type="text" class="form-control" name="Tahun" required="required" pattern="[0-9]{4}" value="{{ $p->Tahun }}"> <br/>
        </div>
        <div>
            Gaji <br> <input type="number" class="form-control" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
        </div>
        <div>
            Tunjangan <br> <input type="number" class="form-control" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}"> <br/>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
	</form>
	@endforeach
@endsection
