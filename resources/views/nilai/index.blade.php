@extends('layout.bahagia')

@section('title', 'CRUD Tabel Nilai Kuliah')
@section('judulhalaman', 'Tabel Data Nilai')

@section('konten')

	<a href="/nilai/add">Tambah Data</a>

	<br/>
	<br/>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if($n->NilaiAngka <= 40)
                        <p>D</p>
                    @elseif ($n->NilaiAngka <= 60)
                        <p>C</p>
                    @elseif ($n->NilaiAngka <= 80)
                        <p>B</p>
                    @else
                        <p>A</p>
                    @endif
                </td>
                <td>
                    {{ $n->NilaiAngka * $n->SKS }}
                </td>
            </tr>
            @endforeach
        </tbody>
	</table>

    {{ $nilai->links() }}

@endsection

