<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
    	$pendapatan = DB::table('pendapatan')
        ->join("pegawai", "pendapatan.IDPegawai", "=", "pegawai.pegawai_id")
        ->select("pendapatan.*", "pegawai.pegawai_nama")
        ->paginate();

    	return view('pendapatan.index',['pendapatan' => $pendapatan]);

    }
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('pendapatan.tambah', ['pegawai' => $pegawai]);

    }

    public function store(Request $request)
    {
        DB::table('pendapatan')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        return redirect('/pendapatan');

    }

    public function edit($id)
    {
        $pendapatan = DB::table('pendapatan')->where('ID',$id)->get();
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('pendapatan.edit',['pendapatan' => $pendapatan, 'pegawai' => $pegawai]);

    }

    public function update(Request $request)
    {
        DB::table('pendapatan')->where('ID',$request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        return redirect('/pendapatan');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pendapatan')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
}


