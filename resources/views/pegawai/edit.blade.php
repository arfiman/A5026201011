@extends('layout.bahagia')

@section('title', 'Mengedit Data Pegawai')
@section('judulhalaman', 'Edit Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div>
            Nama <br> <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
        </div>
        <div>
            Jabatan <br> <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
        </div>
        <div>
            Umur <br> <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
        </div>
        <div>
            Alamat <br> <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
@endsection
