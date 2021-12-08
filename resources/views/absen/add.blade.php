@extends('layout.bahagia')

@section('title', 'Menambah Absen')
@section('judulhalaman', 'Menambah Data Absen')

@section('konten')
    <p> <a href="/absen"> Kembali</a></p>

    <br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div>
            IDPegawai
            <br>
            <select name="idpegawai" id="">
                @foreach($pegawai as $p)
                <option value="{{ $p -> pegawai_id }}">{{ $p -> pegawai_nama }}</option>
                @endforeach
            </select>
        </div>
        <br/>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal:</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>

        <div>
            Status <br/>
            <input type="radio" id="izin" name="status" value="I">
            <label for="izin">Izin</label><br>
            <input type="radio" id="sakit" name="status" value="S" checked="checked">
            <label for="sakit">Sakit</label><br>
            <input type="radio" id="alpha" name="status" value="A">
            <label for="alpha">Alpha</label>
        </div>
        <div>
            <p><input type="submit" value="Simpan Data"></p>
        </div>
	</form>


    <script type="text/javascript">
        $(function () {
            $('#dtpickerdemo').datetimepicker({
                format: 'YYYY-MM-DD hh:mm:ss',
                showTodayButton:false,
                locale: 'id',
                'defaultDate': new Date()
            });
        });
    </script>
@endsection
