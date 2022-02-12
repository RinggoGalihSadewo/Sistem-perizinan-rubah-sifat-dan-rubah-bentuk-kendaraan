<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Map;
use App\Models\FormSifat;
use App\Models\FotoSifat;
use App\Models\FormBentuk;
use App\Models\FotoBentuk;
use App\Models\TrackSuratSifat;
use App\Models\TrackSuratBentuk;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.beranda');
    }

    public function masuk()
    {
        return view('client.login2');
    }

    public function forgotPassword()
    {
        return view('client.forgotPassword2');
    }

    public function rubahSifat()
    {
        return view('client.rubahSifat');
    }

    public function storeSifat(Request $request)
    {
        $validatedData = $request->validate([

            'noKendaraan' => 'required',
            'namaPemilik' => 'required',
            'alamat' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'model' => 'required',
            'warna' => 'required',
            'tahun' => 'required',
            'silinder' => 'required',
            'noLandasan' => 'required',
            'noMesin' => 'required',
            'bpkb' => 'required',
            'fotoSebelum' => 'required|image|mimes:jpeg,png,jpg,svg',
            'fotoSesudah' => 'required|image|mimes:jpeg,png,jpg,svg'            

        ],
        [
            'noKendaraan.required' => 'No. Kendaraan  wajib di isi',
            'namaPemilik.required' => 'Nama Pemilik wajib di isi',
            'alamat.required' => 'Alamat wajib di isi',
            'merk.required' => 'merk wajib di isi',
            'jenis.required' => 'Jenis wajib di isi',
            'model.required' => 'Model wajib di isi',
            'warna.required' => 'Warna wajib di isi',
            'tahun.required' => 'Tahun wajib di isi',
            'silinder.required' => 'Silinder wajib di isi',
            'noLandasan.required' => 'No. Landasan wajib di isi',
            'noMesin.required' => 'No. Mesin wajib di isi',
            'bpkb' => 'No. BPKB wajib di isi',
            'fotoSebelum.required' => 'Wajib masukan foto',
            'fotoSebelum.image' => 'Foto harus berupa gambar',
            'fotoSebelum.mimes' => 'File foto yang di dukung jpeg,png,jpg,svg',
            'fotoSebelum.max' => 'Ukuran gambar maksimal 2MB',
            'fotoSesudah.required' => 'Wajib masukan foto',
            'fotoSesudah.image' => 'Foto harus berupa gambar',
            'fotoSesudah.mimes' => 'File foto yang di dukung jpeg,png,jpg,svg',
            'fotoSesudah.max' => 'Ukuran gambar maksimal 2MB',
  
        ]
        );

        $fotoSebelum = time().'.'.$request->fotoSebelum->extension();
        $fotoSesudah = time().'.'.$request->fotoSesudah->extension();

        $request->fotoSebelum->move(public_path('fotoPerizinanSifat'), $fotoSebelum);
        $request->fotoSesudah->move(public_path('fotoPerizinanSifat'), $fotoSesudah); 

        // FormSifat::create([
        //     'user_id' => Auth::user()->id,
        //     'nomor_kendaraan' => $request->noKendaraan,
        //     'nama_pemilik' => $request->namaPemilik,
        //     'alamat' => $request->alamat,
        //     'merk' => $request->merk,
        //     'jenis' => $request->jenis,
        //     'model' => $request->model,
        //     'warna' => $request->warna,
        //     'tahun' => $request->tahun,
        //     'isi_silinder' => $request->silinder,
        //     'no_landasan' => $request->noLandasan,
        //     'no_mesin' => $request->noMesin,
        //     'no_bpkb' => $request->bpkb
        // ]);

        $formSifat = new FormSifat;

        $formSifat->user_id = Auth::user()->id;
        $formSifat->nomor_kendaraan = $request->noKendaraan;
        $formSifat->nama_pemilik = $request->namaPemilik;
        $formSifat->alamat = $request->alamat;
        $formSifat->merk = $request->merk;
        $formSifat->jenis = $request->jenis;
        $formSifat->model = $request->model;
        $formSifat->warna = $request->warna;
        $formSifat->tahun = $request->tahun;
        $formSifat->isi_silinder = $request->silinder;
        $formSifat->no_landasan = $request->noLandasan;
        $formSifat->no_mesin = $request->noMesin;
        $formSifat->no_bpkb = $request->bpkb;
        $formSifat->save();

        $fotoSifat = new FotoSifat;

        $fotoSifat->formSifat_id = $formSifat->id;
        $fotoSifat->foto_sebelum = $fotoSebelum;
        $fotoSifat->foto_sesudah = $fotoSesudah;
        $fotoSifat->save();

        $TrackSifat = new TrackSuratSifat;

        $valid = "Belum Validasi";

        $TrackSifat->form_sifat_id = $formSifat->id;
        $TrackSifat->staff_angkutan = $valid;
        $TrackSifat->kasi_angkutan = $valid;
        $TrackSifat->kabid_lla = $valid;
        $TrackSifat->sekretariat = $valid;
        $TrackSifat->kepala_dinas = $valid;

        $TrackSifat->save();

        return redirect('/perizinan-rubah-sifat')->with('status', 'Pengisian form perizinan berhasil');

    }


    public function rubahBentuk()
    {
        return view('client.rubahBentuk');
    }

    public function storeBentuk(Request $request)
    {
        $validatedData = $request->validate([

            'noKendaraan' => 'required',
            'namaPemilikLama' => 'required',
            'namaPemilikBaru' => 'required',
            'alamat' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'warna' => 'required',
            'tahun' => 'required',
            'silinder' => 'required',
            'noLandasan' => 'required',
            'noMesin' => 'required',
            'bpkb' => 'required',
            'noUji' => 'required',
            'fotoSebelum' => 'required|image|mimes:jpeg,png,jpg,svg',
            'fotoSesudah' => 'required|image|mimes:jpeg,png,jpg,svg'            

        ],
        [
            'noKendaraan .required' => 'No. Kendaraan  wajib di isi',
            'namaPemilikLama.required' => 'Nama pemilik lama wajib di isi',
            'namaPemilikBaru.required' => 'Nama pemilik baru wajib di isi',
            'alamat.required' => 'Alamat wajib di isi',
            'merk.required' => 'merk wajib di isi',
            'jenis.required' => 'Jenis wajib di isi',
            'warna.required' => 'Warna wajib di isi',
            'tahun.required' => 'Tahun wajib di isi',
            'silinder.required' => 'Silinder wajib di isi',
            'noLandasan.required' => 'No. Landasan wajib di isi',
            'noMesin.required' => 'No. Mesin wajib di isi',
            'bpkb' => 'No. BPKB wajib di isi',
            'noUji' => 'No. Uji wajib di isi',
            'fotoSebelum.required' => 'Wajib masukan foto',
            'fotoSebelum.image' => 'Foto harus berupa gambar',
            'fotoSebelum.mimes' => 'File foto yang di dukung jpeg,png,jpg,svg',
            'fotoSebelum.max' => 'Ukuran gambar maksimal 2MB',
            'fotoSesudah.required' => 'Wajib masukan foto',
            'fotoSesudah.image' => 'Foto harus berupa gambar',
            'fotoSesudah.mimes' => 'File foto yang di dukung jpeg,png,jpg,svg',
            'fotoSesudah.max' => 'Ukuran gambar maksimal 2MB',
  
        ]
        );

        $fotoSebelum = time().'.'.$request->fotoSebelum->extension();
        $fotoSesudah = time().'.'.$request->fotoSesudah->extension();

        $request->fotoSebelum->move(public_path('fotoPerizinanBentuk'), $fotoSebelum);
        $request->fotoSesudah->move(public_path('fotoPerizinanBentuk'), $fotoSesudah); 

        // FormSifat::create([
        //     'user_id' => Auth::user()->id,
        //     'nomor_kendaraan' => $request->noKendaraan,
        //     'nama_pemilik' => $request->namaPemilik,
        //     'alamat' => $request->alamat,
        //     'merk' => $request->merk,
        //     'jenis' => $request->jenis,
        //     'model' => $request->model,
        //     'warna' => $request->warna,
        //     'tahun' => $request->tahun,
        //     'isi_silinder' => $request->silinder,
        //     'no_landasan' => $request->noLandasan,
        //     'no_mesin' => $request->noMesin,
        //     'no_bpkb' => $request->bpkb
        // ]);

        $FormBentuk = new FormBentuk;

        $FormBentuk->user_id = Auth::user()->id;
        $FormBentuk->nomor_kendaraan = $request->noKendaraan;
        $FormBentuk->nama_pemilik_lama = $request->namaPemilikLama;
        $FormBentuk->nama_pemilik_baru = $request->namaPemilikBaru;
        $FormBentuk->alamat = $request->alamat;
        $FormBentuk->merk = $request->merk;
        $FormBentuk->jenis = $request->jenis;
        $FormBentuk->warna = $request->warna;
        $FormBentuk->tahun = $request->tahun;
        $FormBentuk->volume_silinder = $request->silinder;
        $FormBentuk->no_landasan = $request->noLandasan;
        $FormBentuk->no_mesin = $request->noMesin;
        $FormBentuk->no_bpkb = $request->bpkb;
        $FormBentuk->no_uji = $request->noUji;

        $FormBentuk->save();

        $FotoBentuk = new FotoBentuk;

        $FotoBentuk->formBentuk_id = $FormBentuk->id;
        $FotoBentuk->foto_sebelum = $fotoSebelum;
        $FotoBentuk->foto_sesudah = $fotoSesudah;
        $FotoBentuk->save();

        $TrackBentuk = new TrackSuratBentuk;

        $valid = "Belum Validasi";

        $TrackBentuk->form_bentuk_id = $FormBentuk->id;
        $TrackBentuk->kasi = $valid;
        $TrackBentuk->kabid = $valid;
        $TrackBentuk->sekretaris = $valid;
        $TrackBentuk->kepala_dinas = $valid;

        $TrackBentuk->save();

        return redirect('/perizinan-rubah-bentuk')->with('status', 'Pengisian form perizinan berhasil');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
