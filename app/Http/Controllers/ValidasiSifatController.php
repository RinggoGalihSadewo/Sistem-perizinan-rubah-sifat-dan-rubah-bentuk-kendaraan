<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TrackSuratSifat;
use App\Models\FormSifat;

class ValidasiSifatController extends Controller
{
    //

    public function index(FormSifat $formSifat)
    {
        $data = FormSifat::where('konfirmasi', 'Diterima')->get();
        return view('admin.validSifat', compact('data'));
    }

    public function staff(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {

        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'staff_angkutan' => $valid
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function kasi(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'kasi_angkutan' => $valid
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function kabid(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'kabid_lla' => $valid
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function sekretariat(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'sekretariat' => $valid
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function kepalaDinas(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'kepala_dinas' => $valid
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }
}
