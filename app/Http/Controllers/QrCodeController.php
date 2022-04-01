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
        
        $url = "http://127.0.0.1:8000/qr-code/perizinan-rubah-sifat/".$formSifat->slug;

        $url2 = "http://127.0.0.1:8000/perizinan-rubah-sifat/kepala-dinas/".$formSifat->slug;

        $date = Carbon::now()->format("d M Y");

        $data = FormSifat::find($formSifat->id);

        $qr = QrCode::size(100)->generate($url);
        $qr2 = QrCode::size(100)->generate($url2);
        // $qr = base64_encode(QrCode::format('png')->merge(public_path('/img/logo/dishub.png'),0.3,true)->size(100)->generate($url));

        return view('admin.suratSifat', compact('qr', 'data', 'date', 'qr2'));
    }

    public function detailValidSifat($formSifat)
    {
        // $data = FormSifat::find($formSifat->id);
        $data = FormSifat::where('slug', $formSifat)->first();
        return view('client.validSifat', compact('data'));
    }

    public function detailValidBentuk($formBentuk)
    {
        // $data = FormBentuk::find($formBentuk->id);
        $data = FormBentuk::where('slug', $formBentuk)->first();
        return view('client.validBentuk', compact('data'));
    }

    public function viewBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::all();
        return view('admin.dataQrBentuk', compact('data'));
    }

    public function lihatSuratBentuk(FormBentuk $formBentuk)
    {   
        $url = "http://127.0.0.1:8000/qr-code/perizinan-rubah-bentuk/".$formBentuk->slug;

        $url2 = "http://127.0.0.1:8000/perizinan-rubah-bentuk/kepala-dinas/".$formBentuk->slug;

        $data = FormBentuk::find($formBentuk->id);

        $date = Carbon::now()->format("d M Y");

        $qr = QrCode::size(100)->generate($url);
        $qr2 = QrCode::size(100)->generate($url2);
        // $qr = base64_encode(QrCode::format('png')->merge(public_path('/img/logo/dishub.png'),0.3,true)->size(100)->generate($url));

        return view('admin.suratBentuk', compact('qr', 'data', 'date', 'qr2'));
    }

    public function sifatKepalaDinas($formSifat){
        // $data = FormSifat::find($formSifat->id);
        $data = FormSifat::where('slug', $formSifat)->first();
        return view('client.ttdSifat', compact('data'));
    }

    public function sifatKepalaDinas2($formBentuk){
        // $data = FormBentuk::find($formBentuk->id);
        $data = FormBentuk::where('slug', $formBentuk)->first();
        return view('client.ttdBentuk', compact('data'));
    }
}
