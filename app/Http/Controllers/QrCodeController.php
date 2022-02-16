<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormSifat;
use App\Models\FormBentuk;

class QrCodeController extends Controller
{
    //
    public function viewSifat(FormSifat $formSifat)
    {
        $data = FormSifat::all();
        return view('admin.dataQrSifat', compact('data'));
    }

    public function viewBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::all();
        return view('admin.dataQrBentuk', compact('data'));
    }
}
