<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Map;
use App\Models\FormSifat;
use App\Models\FotoSifat;
use App\Models\FormBentuk;
use App\Models\FotoBentuk;
use App\Models\TrackSuratSifat;

use QrCode;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $users = DB::table('users')->get();

        return view('admin.index', compact('users'));
    }

    public function viewEditIndex(User $user)
    {
        return view('admin.editIndex', compact('user'));
    }

    public function storeEditIndex(User $user, Request $request)
    {
        $validatedData = $request->validate([

            'namaPerusahaan' => 'required',
            'namaPemilik' => 'required',
            'kabupaten' => 'required',
            'npwp' => 'required',
            'alamat' => 'required',
            // 'lat' => 'required',
            // 'lng' => 'required',
            'email' => 'required|email',
            'noHp' => 'required',            

        ],
        [
            'namaPerusahaan.required' => 'nama perusahaan wajib di isi',
            'namaPemilik.required' => 'nama pemilik wajib di isi',
            'kabupaten.required' => 'kabupaten wajib di isi',
            'npwp.required' => 'npwp wajib di isi',
            'alamat.required' => 'alamat wajib di isi',
            // 'lat.required' => 'masukan nilai lattitude',
            // 'lng.required' => 'masukan nilai longtitude',
            'email.required' => 'email wajib di isi',
            'email.email' => 'harap masukan email sesuai dengan formatnya',
            'noHP.required' => 'no hp wajib di isi',
  
        ]
        );

        User::where('id', $user->id)
            ->update([
                'nama_perusahaan' => $request->namaPerusahaan,
                'nama_pemilik' => $request->namaPemilik,
                'kabupaten' => $request->kabupaten,
                'npwp' => $request->npwp,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_hp' => $request->noHp
        ]);

        return redirect('/admin/dashboard')->with('status', 'Data berhasil di edit');
    }

    public function rubahSifat()
    {

        // $users = User::with('formSifat')->get();
        $data = FormSifat::with('user')->get(); 
        return view('admin.RubahSifat', compact('data'));
    }

    public function detailRubahSifat(FormSifat $formSifat)
    {
        $foto = FotoSifat::where('formSifat_id', $formSifat->id)->get();
        return view('admin.detailRubahSifat', compact('formSifat', 'foto'));
    }
    
    public function viewEditSifat(FormSifat $formSifat)
    {
        return view('admin.editRubahSifat', compact('formSifat'));
    }

    public function storeEditSifat(FormSifat $formSifat, Request $request, User $user)
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
            'isiSilinder' => 'required',
            'noLandasan' => 'required',
            'noMesin' => 'required',
            'noBpkb' => 'required',
            // 'fotoSebelum' => 'required|image|mimes:jpeg,png,jpg,svg',
            // 'fotoSesudah' => 'required|image|mimes:jpeg,png,jpg,svg'            

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
            'isiSilinder.required' => 'Isi Silinder wajib di isi',
            'noLandasan.required' => 'No. Landasan wajib di isi',
            'noMesin.required' => 'No. Mesin wajib di isi',
            'noBpkb.required' => 'No. BPKB wajib di isi',
            // 'fotoSebelum.required' => 'Wajib masukan foto',
            // 'fotoSebelum.image' => 'Foto harus berupa gambar',
            // 'fotoSebelum.mimes' => 'File foto yang di dukung jpeg,png,jpg,svg',
            // 'fotoSebelum.max' => 'Ukuran gambar maksimal 2MB',
            // 'fotoSesudah.required' => 'Wajib masukan foto',
            // 'fotoSesudah.image' => 'Foto harus berupa gambar',
            // 'fotoSesudah.mimes' => 'File foto yang di dukung jpeg,png,jpg,svg',
            // 'fotoSesudah.max' => 'Ukuran gambar maksimal 2MB',
  
        ]
        );

        FormSifat::where('id', $formSifat->id)
            ->update([
                'nomor_kendaraan' => $request->noKendaraan,
                'nama_pemilik' => $request->namaPemilik,
                'alamat' => $request->alamat,
                'merk' => $request->merk,
                'jenis' => $request->jenis,
                'model' => $request->model,
                'warna' => $request->warna,
                'tahun' => $request->tahun,
                'isi_silinder' => $request->isiSilinder,
                'no_landasan' => $request->noLandasan,
                'no_mesin' => $request->noMesin,
                'no_bpkb' => $request->noBpkb,
        ]);

        return redirect('/admin/data-rubah-sifat')->with('status', 'Data berhasil di edit');
    }

    public function rubahBentuk()
    {
        $data = FormBentuk::with('user')->get();
        return view('admin.RubahBentuk', compact('data'));
    }

    public function detailRubahBentuk(FormBentuk $formBentuk)
    {
        $foto = FotoBentuk::where('formBentuk_id', $formBentuk->id)->get();
        return view('admin.detailRubahBentuk', compact('formBentuk', 'foto'));
    }

    public function storeEditBentuk(FormBentuk $formBentuk, Request $request)
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
            'volumeSilinder' => 'required',
            'noLandasan' => 'required',
            'noMesin' => 'required',
            'noBpkb' => 'required',
            'noUji' => 'required',
            // 'fotoSebelum' => 'required|image|mimes:jpeg,png,jpg,svg',
            // 'fotoSesudah' => 'required|image|mimes:jpeg,png,jpg,svg'            

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
            'volumeSilinder.required' => 'Volume Silinder wajib di isi',
            'noLandasan.required' => 'No. Landasan wajib di isi',
            'noMesin.required' => 'No. Mesin wajib di isi',
            'noBpkb' => 'No. BPKB wajib di isi',
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



        FormBentuk::where('id', $formBentuk->id)
        ->update([
            "nomor_kendaraan" => $request->noKendaraan,
            "nama_pemilik_lama" => $request->namaPemilikLama,
            "nama_pemilik_baru" => $request->namaPemilikBaru,
            "alamat" => $request->alamat,
            "merk" => $request->merk,
            "jenis" => $request->jenis,
            "warna" => $request->warna,
            "tahun" => $request->tahun,
            "volume_silinder" => $request->volumeSilinder,
            "no_landasan" => $request->noLandasan,
            "no_mesin" => $request->noMesin,
            "no_bpkb" => $request->noBpkb,
            "no_uji" => $request->noUji,

         ]);

         return redirect('/admin/data-rubah-bentuk')->with('status', 'Data berhasil di edit');

    }

    public function viewEditBentuk(FormBentuk $formBentuk)
    {
        return view('admin.editRubahBentuk', compact('formBentuk'));
    }
    
    public function qrCode()
    {
        return view('admin.dataQr');
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
    public function show(User $user, Map $map)
    {
        //
        $map = Map::with('user')->where('user_id', $user->id)->firstOrFail();

        $qr = QrCode::size(250)->generate('https://www.google.com/maps/search/'.$map->lat.','.$map->lng.'/@'.$map->lat.','.$map->lng);

        return view('admin.detail', compact('user', 'qr'));
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
