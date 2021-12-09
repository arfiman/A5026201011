<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = DB::table('mobil')->paginate(5);
    	return view('mobil.index',['mobil' => $mobil]);

    }

    public function add()
    {
        return view('mobil.add');
    }

    public function store(Request $request)
    {
        $tersedia = 'N';
        if($request->tersedia == 'on'){
            $tersedia = 'Y';
        }
        DB::table('mobil')->insert([
            'merkmobil' => $request->merkmobil,
            'stockmobil' => $request->stockmobil,
            'tersedia' => $tersedia
        ]);
        return redirect('/mobil');
    }
    public function edit($kode)
    {
        $mobil = DB::table('mobil')->where('kodemobil', $kode)->get();

        return view('mobil.edit', ['mobil' => $mobil]);
    }

    public function update(Request $request)
    {
        $tersedia = 'N';
        if($request->tersedia == 'on'){
            $tersedia = 'Y';
        }
        DB::table('mobil')->where('kodemobil', $request->kodemobil)->update([
            'merkmobil' => $request->merkmobil,
            'stockmobil' => $request->stockmobil,
            'tersedia' => $tersedia
        ]);
        return redirect('/mobil');
    }

    public function hapus($kode)
    {
        DB::table('mobil')->where('kodemobil', $kode)->delete();

        return redirect('/mobil');
    }

    public function cari(Request $request)
    {
		$cari = $request->cari;

		$mobil = DB::table('mobil')
		->where('merkmobil', 'like', "%".$cari."%")
		->paginate();

		return view('mobil.index',['mobil' => $mobil]);
	}

    public function detail($kode)
    {
        $mobil = DB::table('mobil')->where('kodemobil',$kode)->get();

        return view('mobil.detail',['mobil' => $mobil]);
    }
}
