<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\siswa;

class PencarianController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function filter(Request $request)
    {
    	$j_sertifikat = $request->sertifikat;
    	$no_sertifikat = $request->no_sertifikat;
    	$nama = $request->nama;
    	$kelamin = $request->kelamin;
    	$tgl_lahir = $request->tgl_lahir;
    	$tmpt_lahir = $request->tmpt_lahir;
    	$asal_sklh = $request->asal_sklh;
    	$program_keahlian = $request->program_keahlian;
    	$tgl_masuk = $request->tgl_masuk;
    	$tgl_selesai = $request->tgl_selesai;


    	$siswa = siswa::latest()->where('sertifikat', 'like', '%' .$j_sertifikat. '%')->where('no_sertifikat', 'like', '%' .$no_sertifikat. '%')->where('nama', 'like', '%' .$nama. '%')->where('kelamin', 'like', '%' .$kelamin. '%')->where('tgl_lahir', 'like', '%' .$tgl_lahir. '%')->where('tmpt_lahir', 'like', '%' .$tmpt_lahir. '%')->where('asal_sklh', 'like', '%' .$asal_sklh. '%')->where('program_keahlian', 'like', '%' .$program_keahlian. '%')->where('tgl_masuk', 'like', '%' .$tgl_masuk. '%')->where('tgl_selesai', 'like', '%' .$tgl_selesai. '%')->get();
    	return view('pages.daftarsiswa', compact('siswa'));
    }
}
