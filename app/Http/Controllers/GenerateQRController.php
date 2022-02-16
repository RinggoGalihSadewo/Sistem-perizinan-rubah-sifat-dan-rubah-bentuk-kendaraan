<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\FormSifat;
use App\Models\FormBentuk;
use App\Models\QrSifat;
use App\Models\QrBentuk;


class GenerateQRController extends Controller
{
    //
    public function viewGenerateRubahSifat(FormSifat $formSifat)
    {
        $data = FormSifat::with('user')->get();
        return view('admin.genRubahSifat', compact('data'));
    }

    public function generateSifat(FormSifat $formSifat, Request $request)
    {
        $valid = bcrypt('valid');

        

        $qr = new QrSifat;
        $qr->form_sifat_id = $formSifat->id;
        $qr->no_surat = $request->noSurat;
        $qr->qr_valid = $valid;
        $qr->save();

        return redirect('/admin/generate-qrcode-rubah-sifat')->with('status', 'Generate berhasil');
    }
}
