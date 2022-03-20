<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Map;
use App\Models\FormSifat;
use App\Models\BerkasSifat;
use App\Models\FormBentuk;
use App\Models\BerkasBentuk;
use App\Models\TrackSuratSifat;
use App\Models\laporan;

class SearchController extends Controller
{
    //
    public function pengguna(User $user, Request $request)
    {
        $users = DB::table('users')
                    ->where('nama_perusahaan','like',"%".$request->key."%")
                    ->get();
        return view('admin.index', compact('users'));
    }

    public function sifat(FormSifat $formSifat, Request $request)
    {
        $data = FormSifat::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.RubahSifat', compact('data'));
    }

    public function bentuk(FormBentuk $Formbentuk, Request $request)
    {
        $data = FormBentuk::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.RubahBentuk', compact('data'));
    }

    public function qrSifat(FormSifat $formSifat, Request $request)
    {
        $data = FormSifat::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.dataQrSifat', compact('data'));
    }  
    
    public function qrBentuk(FormBentuk $FormBentuk, Request $request)
    {
        $data = FormBentuk::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.dataQrBentuk', compact('data'));
    }  

    public function genQrSifat(FormSifat $formSifat, Request $request)
    {
        $data = FormSifat::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.genRubahSifat', compact('data'));
    } 

    public function genQrBentuk(FormBentuk $formBentuk, Request $request)
    {
        $data = FormBentuk::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.genRubahBentuk', compact('data'));
    }
    
    public function valSifat(FormSifat $formSifat, Request $request)
    {
        $data = FormSifat::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.validSifat', compact('data'));
    }
    
    public function valBentuk(FormBentuk $formBentuk, Request $request)
    {
        $data = FormBentuk::with('user')
                    ->where('nomor_kendaraan','like',"%".$request->key."%")
                    ->get();
        return view('admin.validBentuk', compact('data'));
    }
}
