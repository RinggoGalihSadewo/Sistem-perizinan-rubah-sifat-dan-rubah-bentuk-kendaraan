<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Map;
use App\Models\FormSifat;
use App\Models\BerkasSifat;
use App\Models\FormBentuk;
use App\Models\BerkasBentuk;
use App\Models\TrackSuratSifat;

use QrCode;
use PDF;

use Carbon\Carbon;

class PdfController extends Controller
{
    //
    public function generateSifat(FormSifat $formSifat)
    {
        $data = FormSifat::find($formSifat->id);

        $date = Carbon::now()->isoFormat('D MMMM Y');
        
        $url = "http://127.0.0.1:8000/qr-code/perizinan-rubah-sifat/".$formSifat->slug;
        $url2 = "http://127.0.0.1:8000/perizinan-rubah-sifat/kepala-dinas/".$formSifat->slug;

        $qr = base64_encode(QrCode::format('png')->size(80)->generate($url));
        $qr2 = base64_encode(QrCode::format('png')->size(80)->generate($url2));
        // $qr = QrCode::size(100)->generate($url);

        $pdf = PDF::loadView('admin.suratSifatDownload', compact('data', 'qr', 'date', 'qr2'))->setPaper('a4', 'potrait')->setWarnings(false);

        $no = $formSifat->nomor_kendaraan;

        return $pdf->download($no."_ Perizinan Rubah Sifat.pdf");
    }

    public function generateBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::find($formBentuk->id);

        $date = Carbon::now()->isoFormat('D MMMM Y');
        
        $url = "http://127.0.0.1:8000/qr-code/perizinan-rubah-bentuk/".$formBentuk->slug;
        $url2 = "http://127.0.0.1:8000/perizinan-rubah-bentuk/kepala-dinas/".$formBentuk->slug;

        $qr = base64_encode(QrCode::format('png')->size(80)->generate($url));
        $qr2 = base64_encode(QrCode::format('png')->size(80)->generate($url2));
        // $qr = QrCode::size(100)->generate($url);

        $pdf = PDF::loadView('admin.suratBentukDownload', compact('data', 'qr', 'date', 'qr2'))->setPaper('a4', 'potrait')->setWarnings(false);;

        $no = $formBentuk->nomor_kendaraan;

        return $pdf->download($no."_ Perizinan Rubah Bentuk.pdf");
    }
}
