<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormSifat;
use App\Models\FormBentuk;

use QrCode;
use Carbon\Carbon;

class QrCodeController extends Controller
{
    //
    public function viewSifat(FormSifat $formSifat)
    {
        $data = FormSifat::all();
        return view('admin.dataQrSifat', compact('data'));
    }

    public function lihatSuratSifat(FormSifat $formSifat)
    {   
        $url = "http://127.0.0.1:8000/qr-code/perizinan-rubah-sifat/".$formSifat->id;

        $url2 = "http://127.0.0.1:8000/perizinan-rubah-sifat/kepala-dinas/".$formSifat->id;

        $date = Carbon::now()->format("d M Y");

        $data = FormSifat::find($formSifat->id);

        $qr = QrCode::size(100)->generate($url);
        $qr2 = QrCode::size(100)->generate($url2);

        return view('admin.suratSifat', compact('qr', 'data', 'date', 'qr2'));
    }

    public function detailValidSifat(FormSifat $formSifat)
    {
        $data = FormSifat::find($formSifat->id);
        return view('client.validSifat', compact('data'));
    }

    public function detailValidBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::find($formBentuk->id);
        return view('client.validBentuk', compact('data'));
    }

    public function viewBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::all();
        return view('admin.dataQrBentuk', compact('data'));
    }

    public function lihatSuratBentuk(FormBentuk $formBentuk)
    {   
        $url = "http://127.0.0.1:8000/qr-code/perizinan-rubah-bentuk/".$formBentuk->id;

        $url2 = "http://127.0.0.1:8000/perizinan-rubah-bentuk/kepala-dinas/".$formBentuk->id;

        $data = FormBentuk::find($formBentuk->id);

        $date = Carbon::now()->format("d M Y");

        $qr = QrCode::size(100)->generate($url);
        $qr2 = QrCode::size(100)->generate($url2);

        return view('admin.suratBentuk', compact('qr', 'data', 'date', 'qr2'));
    }

    public function sifatKepalaDinas(FormSifat $formSifat){
        $data = FormSifat::find($formSifat->id);
        return view('client.ttdSifat', compact('data'));
    }

    public function sifatKepalaDinas2(FormBentuk $formBentuk){
        $data = FormBentuk::find($formBentuk->id);
        return view('client.ttdBentuk', compact('data'));
    }
}
