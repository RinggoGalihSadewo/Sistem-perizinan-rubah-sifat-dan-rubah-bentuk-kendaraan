<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\TrackSuratSifat;
use App\Models\FormSifat;
use Carbon\Carbon;

class ValidasiSifatController extends Controller
{
    //

    public function index(FormSifat $formSifat)
    {
        $data = FormSifat::where('konfirmasi', 'Diterima')->paginate(10);
        return view('admin.validSifat', compact('data'));
    }

    public function staff(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {

        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'staff_angkutan' => $valid,
                'tgl_staff' => Carbon::now()->isoFormat('D MMMM Y'),
                'nama_staff' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function kasi(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'kasi_angkutan' => $valid,
                'tgl_kasi' => Carbon::now()->isoFormat('D MMMM Y'),
                'nama_kasi' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function kabid(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'kabid_lla' => $valid,
                'tgl_kabid' => Carbon::now()->isoFormat('D MMMM Y'),
                'nama_kabid' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function sekretariat(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'sekretariat' => $valid,
                'tgl_sekretariat' => Carbon::now()->isoFormat('D MMMM Y'),
                'nama_sekretariat' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }

    public function kepalaDinas(TrackSuratSifat $trackSuratSifat, FormSifat $formSifat)
    {
        $valid = "Sudah Validasi";

        TrackSuratSifat::where('form_sifat_id', $formSifat->id)
            ->update([
                'kepala_dinas' => $valid,
                'tgl_kepala' => Carbon::now()->isoFormat('D MMMM Y'),
                'nama_kepala_dinas' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-sifat')->with('status', 'Berhasil melakukan validasi');
    }
}
