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
use App\Models\laporan;

class DeleteController extends Controller
{
    //
    public function pengguna(User $user)
    {
        User::destroy($user->id);
        return redirect('/admin/dashboard')->with('status','Berhasil menghapus data');
    }

    public function sifat(FormSifat $formSifat)
    {
        FormSifat::destroy($formSifat->id);
        return redirect('/admin/data-rubah-sifat')->with('status','Berhasil menghapus data');
    }

    public function bentuk(FormBentuk $formBentuk)
    {
        FormBentuk::destroy($formBentuk->id);
        return redirect('/admin/data-rubah-bentuk')->with('status','Berhasil menghapus data');
    }
}
