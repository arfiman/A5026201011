@extends('layout.bahagia')

@section('title', 'Lihat Detail Data Pegawai')
@section('judulhalaman', 'Detail Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
        <div>
            Nama :
            {{ $p->pegawai_nama }} <br/>
        </div>
        <div>
            Jabatan :
            {{ $p->pegawai_jabatan }} <br/>
        </div>
        <div>
            Umur :
            {{ $p->pegawai_umur }} <br/>
        </div>
        <div>
            Alamat :
            {{ $p->pegawai_alamat }} <br/>
        </div>
	@endforeach
@endsection
