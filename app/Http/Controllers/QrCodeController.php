<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormSifat;
use App\Models\FormBentuk;

use QrCode;

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
        $url = "http://127.0.0.1:8000/admin/data-rubah-sifat/detail/".$formSifat->id;

        $data = FormSifat::find($formSifat->id);

        $qr = QrCode::size(100)->generate($url);
        return view('admin.suratSifat', compact('qr', 'data'));
    }

    public function viewBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::all();
        return view('admin.dataQrBentuk', compact('data'));
    }
}
