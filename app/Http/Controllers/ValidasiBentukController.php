<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TrackSuratBentuk;
use App\Models\FormBentuk;

class ValidasiBentukController extends Controller
{
    //
    public function index(FormBentuk $formBentuk)
    {
        $data = FormBentuk::all();
        return view('admin.validBentuk', compact('data'));
    }

    public function kasi(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'kasi' => $valid
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }

    public function kabid(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'kabid' => $valid
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }

    public function sekretaris(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'sekretaris' => $valid
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }

    public function kepalaDinas(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'kepala_dinas' => $valid
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }
}
