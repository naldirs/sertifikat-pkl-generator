<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\siswa;
use App\nilai_umum;
use App\nilai_keahlian;
use App\asn;
use Dompdf\Dompdf;



// use Carbon\Carbon;
// use Jenssegers\Date\Date;

class siswaController extends Controller
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
    
    public function show()
    {
    	$siswa = siswa::all();
        return view('pages.daftarsiswa', compact('siswa'));
    }

    public function detail($id)
    {
        $siswa = siswa::find($id);
        $nilai_umum = nilai_umum::where('siswa_id',$id)->first();
        $nilai_keahlian = nilai_keahlian::where('siswa_id',$id)->get();
        
 
        $j_data_nk = nilai_keahlian::where('siswa_id',$id)->count();
        $j_nilai_nk = nilai_keahlian::where('siswa_id',$id)->sum('nilai');

       

    	return view('pages.datasiswa', compact('siswa','nilai_keahlian','nilai_umum','j_data_nk','j_nilai_nk'));
    }

    public function create() 
    {
        $last = siswa::latest('no_sertifikat')->first();
        return view('pages.tambahsiswa', compact('last'));
    }

    public function store(Request $request)
    {
        $siswa = new siswa;
        $siswa->no_induk = $request->no_induk;
        $siswa->sertifikat = $request->sertifikat;
        $siswa->no_sertifikat = $request->no_sertifikat;
        $siswa->status = $request->status;
        $siswa->nama = $request->nama;
        $siswa->kelamin = $request->kelamin;
        $siswa->program_keahlian = $request->program_keahlian;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->tmpt_lahir = $request->tmpt_lahir;
        $siswa->asal_sklh = $request->asal_sklh;
        $siswa->tgl_masuk = $request->tgl_masuk;
        $siswa->tgl_selesai = $request->tgl_selesai;



        $siswa->save();

        return redirect()->route('tambah.nilai.umum', $siswa);
    }

    public function edit($id)
    {
        $siswa = siswa::find($id);
        return view('pages.editsiswa', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->no_induk = $request->no_induk;
        $siswa->sertifikat = $request->sertifikat;
        $siswa->no_sertifikat = $request->no_sertifikat;
        $siswa->status = $request->status;
        $siswa->kelamin = $request->kelamin;
        $siswa->program_keahlian = $request->program_keahlian;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->tmpt_lahir = $request->tmpt_lahir;
        $siswa->asal_sklh = $request->asal_sklh;
        $siswa->tgl_masuk = $request->tgl_masuk;
        $siswa->tgl_selesai = $request->tgl_selesai;
        $siswa->save();

        return redirect()->route('detail.siswa', $siswa)->with('success','Mengedit data siswa');
    }
	public function destroy($id)
    {
        siswa::where('id', $id)->delete();
        return redirect()->back()->with('warning','Menghapus data siswa');
    }

    public function printnilai($id)
    {
                

        $siswa = siswa::find($id);
        $nilai_umum = nilai_umum::where('siswa_id',$id)->first();
        $nilai_keahlian = nilai_keahlian::where('siswa_id',$id)->get();
        $signdepan = asn::where('page','depan')->first();
        $signbelakang = asn::where('page', 'belakang')->first();
        $t_masuk = tglIndo(siswa::where('id',$id)->pluck('tgl_masuk')->first());
        
        

        $data = [];
        $data['siswa'] = $siswa;
        $data['nilai_umum'] = $nilai_umum;
        $data['nilai_keahlian'] = $nilai_keahlian;
        $data['signdepan'] = $signdepan;
        $data['signbelakang'] = $signbelakang;

        $data['j_data_nk'] = nilai_keahlian::where('siswa_id',$id)->count();
        $data['j_nilai_nk'] = nilai_keahlian::where('siswa_id',$id)->sum('nilai');



        $dompdf = new Dompdf();

        $print = view('printf4', $data)->render();

        $dompdf->loadHtml($print);
        $dompdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
        $dompdf->render();
        $dompdf->stream("filename.pdf", array("Attachment" => false));
 
        
    }


}
