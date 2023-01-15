<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asn;

class templateController extends Controller
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
        return view('pages.configtemplate');
    }

    public function ks()
    {
        $depan = asn::where('page','depan')->first();
        $belakang = asn::where('page', 'belakang')->first();
        return view('pages.template.signpage', compact('depan','belakang'));
    }
    public function border()
    {
        //
    }
    public function preview()
    {
        //
    }

    //edit update controller function
    public function enditpagedepan()
    {
        $depan = asn::where('page','depan')->first();
        $belakang = asn::where('page', 'belakang')->first();
        return view('pages.template.editsignpagedepan', compact('depan','belakang'));
    }

    public function updatepagedepan(Request $request)
    {
        $depan = asn::where('page','depan')->first();
        $depan->nama = $request->nama;
        $depan->nip = $request->nip;
        $depan->jabatan = $request->jabatan;
        $depan->ket1 = $request->ket1;
        $depan->ket2 = $request->ket2;
        $depan->sebagai = $request->sebagai;
        $depan->save();
        return redirect()->route('ks')->with('success','Mengedit sign page depan');
    }

    //edit update controller function
    public function enditpagebelakang()
    {
        $depan = asn::where('page','depan')->first();
        $belakang = asn::where('page', 'belakang')->first();
        return view('pages.template.editsignpagebelakang', compact('depan','belakang'));
    }

    public function updatepagebelakang(Request $request)
    {
        $belakang = asn::where('page','belakang')->first();
        $belakang->nama = $request->nama;
        $belakang->nip = $request->nip;
        $belakang->jabatan = $request->jabatan;
        $belakang->ket1 = $request->ket1;
        $belakang->ket2 = $request->ket2;
        $belakang->sebagai = $request->sebagai;
        $belakang->save();
        return redirect()->route('ks')->with('success','Mengedit sign page belakang');
    }
}
