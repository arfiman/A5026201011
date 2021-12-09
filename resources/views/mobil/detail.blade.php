@extends('layout.bahagia')

@section('title', 'Lihat Detail Data Mobil')
@section('judulhalaman', 'Detail Mobil')

@section('konten')

	<a href="/mobil"> Kembali</a>

	<br/>
	<br/>

	@foreach($mobil as $m)
        <div>
            Merk :
            {{ $m->merkmobil }} <br/>
        </div>
        <div>
            Stock Mobil :
            {{ $m->stockmobil }} <br/>
        </div>
        <div>
            Ketersediaan :
            @if($m->tersedia === 'Y')
                Ya
            @else
                Tidak
            @endif
            <br/>
        </div>
	@endforeach
@endsection
