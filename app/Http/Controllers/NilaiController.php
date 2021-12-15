<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilaikuliah')->paginate(5);

    	return view('nilai.index',['nilai' => $nilai]);
    }

    public function add()
    {
        return view('nilai.add');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        return redirect('/nilai');

    }
}
