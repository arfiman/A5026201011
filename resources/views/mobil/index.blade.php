@extends('layout.bahagia')

@section('title', 'CRUD Tabel Mobil')
@section('judulhalaman', 'Tabel Data Mobil')

@section('konten')

	<a href="/mobil/add"> + Tambah Mobil Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
	    <form action="/mobil/cari" method="GET">
            <div>
                <input type="text" class="form-control" name="cari" placeholder="Cari Mobil .." value="{{ old('cari') }}"> {{-- old() ini buat nampilin nilai yang dimasukin sebelumnya --}}
            </div>
            <div>
                <input type="submit" class="btn btn-default" value="CARI">
            </div>
        </form>
    </div>

	<table>
        <thead>
            <tr>
                <th>Merk</th>
                {{-- <th>Stock</th> --}}
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobil as $m)
            <tr>
                <td>{{ $m->merkmobil }}</td>
                {{-- <td>{{ $m->stockmobil }}</td> --}}
                <td>
                    @if($m->tersedia === 'Y')
                        Ya
                    @else
                        Tidak
                    @endif
                </td>
                <td>
                    <a href="/mobil/view/{{ $m->kodemobil }}">View Detail</a>
                    |
                    <a href="/mobil/edit/{{ $m->kodemobil }}">Edit</a>
                    |
                    <a href="/mobil/hapus/{{ $m->kodemobil }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
	</table>

    {{ $mobil->links() }}

@endsection

