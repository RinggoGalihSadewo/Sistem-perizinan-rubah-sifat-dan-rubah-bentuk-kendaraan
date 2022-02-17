<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Map;
use App\Models\FormSifat;
use App\Models\FotoSifat;
use App\Models\FormBentuk;
use App\Models\FotoBentuk;
use App\Models\TrackSuratSifat;

use QrCode;
use PDF;

class PdfController extends Controller
{
    //
    public function generateSifat(FormSifat $formSifat)
    {
        $data = FormSifat::find($formSifat->id);
        
        $url = "http://127.0.0.1:8000/admin/data-rubah-sifat/detail/".$formSifat->id;

        $qr = QrCode::size(100)->generate($url);

        $pdf = PDF::loadView('admin.suratSifatDownload', compact('data', 'qr'));

        $no = $formSifat->nomor_kendaraan;

        return $pdf->download($no."_ Perizinan rubah sifat.pdf");
    }
}
