<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\TrackSuratBentuk;
use App\Models\FormBentuk;
use Carbon\Carbon;

class ValidasiBentukController extends Controller
{
    //
    public function index(FormBentuk $formBentuk)
    {
        $data = FormBentuk::where('konfirmasi', 'Diterima')->get();
        return view('admin.validBentuk', compact('data'));
    }

    public function kasi(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'kasi' => $valid,
                'tgl_kasi' => Carbon::now()->format("d M Y"),
                'nama_kasi' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }

    public function kabid(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'kabid' => $valid,
                'tgl_kabid' => Carbon::now()->format("d M Y"),
                'nama_kabid' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }

    public function sekretaris(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'sekretaris' => $valid,
                'tgl_sekretaris' => Carbon::now()->format("d M Y"),
                'nama_sekretaris' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }

    public function kepalaDinas(TrackSuratBentuk $trackSuratBentuk, FormBentuk $formBentuk)
    {
        $valid = "Sudah Validasi";

        TrackSuratBentuk::where('form_bentuk_id', $formBentuk->id)
            ->update([
                'kepala_dinas' => $valid,
                'tgl_kepala' => Carbon::now()->format("d M Y"),
                'nama_kepala_dinas' => Auth::user()->nama_pemilik
        ]);

        return redirect('/admin/validasi/rubah-bentuk')->with('status', 'Berhasil melakukan validasi');
    }
}
