<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nilai_keahlian;
use App\siswa;

class nilaikeahlianController extends Controller
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
    

    public function store(Request $request, $siswa)
    {
        $nilai_keahlian = new nilai_keahlian;
        $nilai_keahlian->siswa_id = $siswa;
        $nilai_keahlian->nama_komponen = $request->nama_komponen;
        $nilai_keahlian->nilai = $request->nilai;

        $nilai_keahlian->save();

        return redirect()->route('detail.siswa', $siswa)->with('success','Berhasil menambahkan nilai');
    }


    public function update(Request $request)
    {
        $nilai_keahlian = nilai_keahlian::findOrFail($request->id_nilaikeahlian);
        $nilai_keahlian->nama_komponen = $request->nama_komponen;
        $nilai_keahlian->nilai = $request->nilai;

        $nilai_keahlian->save();

        return redirect()->back()->with('success','mengedit nilai');        
    }
	public function destroy($id)
    {
        nilai_keahlian::where('id', $id)->delete();
        return redirect()->back()->with('warning','nilai telah dihapus');
    }
}
