@extends('layout.bahagia')

@section('title', 'CRUD Tabel Pendapatan')
@section('judulhalaman', 'Daftar Pendapatan Pegawai')

@section('konten')
	<a href="/pendapatan/tambah"> + Tambah Data Pendapatan Baru</a>

	<br/>
	<br/>

	<table>
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Gaji</th>
                <th>Tunjangan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendapatan as $p)
            <tr>
                <td>{{ $p->IDPegawai }}</td>
                <td>{{ $p->Bulan }}</td>
                <td>{{ $p->Tahun }}</td>
                <td>{{ $p->Gaji }}</td>
                <td>{{ $p->Tunjangan }}</td>
                <td>
                    <a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
                    |
                    <a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
	</table>
@endsection
