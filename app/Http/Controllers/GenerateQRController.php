<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\FormSifat;
use App\Models\FormBentuk;
use App\Models\QrSifat;
use App\Models\QrBentuk;
use Carbon\Carbon;

class GenerateQRController extends Controller
{
    //
    public function viewGenerateRubahSifat(FormSifat $formSifat)
    {
        $data = FormSifat::with('user')->paginate(10);
        return view('admin.genRubahSifat', compact('data'));
    }

    public function generateSifat(FormSifat $formSifat, Request $request)
    {   
    
        $validatedData = $request->validate([  
            'noSurat' => 'required',
        ],
        [
            'noSurat.required' => 'No surat wajib di isi',
        ]
        );

        $valid = bcrypt('valid');        

        $qr = new QrSifat;
        $qr->form_sifat_id = $formSifat->id;
        $qr->no_surat = $request->noSurat;
        if($request->catatan == null){
            $qr->catatan = "-";
        }
        elseif($request->catatan){
            $qr->catatan = $request->catatan;
        }
        $qr->masa = Carbon::now()->addMonth(3)->format("d M Y");
        $qr->qr_valid = $valid;
        $qr->save();

        return redirect('/admin/generate-qrcode-rubah-sifat')->with('status', 'Generate berhasil');
    }

    public function viewGenerateRubahBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::with('user')->paginate(10);
        return view('admin.genRubahBentuk', compact('data'));
    }

    public function generateBentuk(FormBentuk $formBentuk, Request $request)
    {
        $validatedData = $request->validate([  
            'noSurat' => 'required',
        ],
        [
            'noSurat.required' => 'No surat wajib di isi',
        ]
        );

        $valid = bcrypt('valid');        

        $qr = new QrBentuk;
        $qr->form_bentuk_id = $formBentuk->id;
        $qr->no_surat = $request->noSurat;
        if($request->catatan == null){
            $qr->catatan = "-";
        }
        elseif($request->catatan){
            $qr->catatan = $request->catatan;
        }
        $qr->masa = Carbon::now()->addMonth(6)->format("d M Y");
        $qr->qr_valid = $valid;
        $qr->save();

        return redirect('/admin/generate-qrcode-rubah-bentuk')->with('status', 'Generate berhasil');
    }
}
