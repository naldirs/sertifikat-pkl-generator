<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nilai_umum;
use App\siswa;

class nilaiumumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create($id)
    {
        $siswa = siswa::find($id);
        return view('pages.tambahnilaiumum', compact('siswa'));
    }

    public function store(Request $request, $siswa)
    {
        $nilai_umum = new nilai_umum;
        $nilai_umum->siswa_id = $siswa;
        $nilai_umum->disiplin = $request->disiplin;
        $nilai_umum->kerjasama = $request->kerjasama;
        $nilai_umum->kerajinan = $request->kerajinan;
        $nilai_umum->tanggung_jawab = $request->tanggung_jawab;
        $nilai_umum->sikap = $request->sikap;
        $nilai_umum->k3 = $request->k3;
        $nilai_umum->kreatif_kl = $request->kreatif_kl;
        $nilai_umum->persiapan = $request->persiapan;
        $nilai_umum->analisa = $request->analisa;
        $nilai_umum->perawatan_p = $request->perawatan_p;
        $nilai_umum->metode_lk = $request->metode_lk;
        $nilai_umum->ketetapan_h = $request->ketetapan_h;
        $nilai_umum->save();



        switch($request->input('action')) {

        case 'simpan': 
        return redirect()->route('detail.siswa', $siswa)->with('success','Menambahkan nilai');
        break;

        case 'tambah': 
        //action for save-draft here
        return redirect()->route('tambah.nilai.keahlian', $siswa);
        break;
        }

    }

    // public function edit($siswa)
    // {
    //     $nilai_umum = nilai_umum::where('siswa_id',$siswa)->first();
    //     return view('pages.editnilaiumum', compact('nilai_umum'));
    // }

    public function update(Request $request, $siswa)
    {
        $nilai_umum = nilai_umum::where('siswa_id',$siswa)->first();

        $nilai_umum->disiplin = $request->disiplin;
        $nilai_umum->kerjasama = $request->kerjasama;
        $nilai_umum->kerajinan = $request->kerajinan;
        $nilai_umum->tanggung_jawab = $request->tanggung_jawab;
        $nilai_umum->sikap = $request->sikap;
        $nilai_umum->k3 = $request->k3;
        $nilai_umum->kreatif_kl = $request->kreatif_kl;
        $nilai_umum->persiapan = $request->persiapan;
        $nilai_umum->analisa = $request->analisa;
        $nilai_umum->perawatan_p = $request->perawatan_p;
        $nilai_umum->metode_lk = $request->metode_lk;
        $nilai_umum->ketetapan_h = $request->ketetapan_h;
        $nilai_umum->save();


        return redirect()->back()->with('success','mengedit nilai');
    }
	
}
