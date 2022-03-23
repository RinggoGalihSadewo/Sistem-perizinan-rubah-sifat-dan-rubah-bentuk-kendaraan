<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Map;
use App\Models\FormSifat;
use App\Models\BerkasSifat;
use App\Models\FormBentuk;
use App\Models\BerkasBentuk;
use App\Models\TrackSuratSifat;
use App\Models\laporan;

use QrCode;
use Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $users = User::where('role', 'Pengguna')->get();

        return view('admin.index', compact('users'));
    }

    public function viewEditIndex(User $user)
    {
        return view('admin.editIndex', compact('user'));
    }

    public function storeEditIndex(User $user, Request $request)
    {
        // $validatedData = $request->validate([

        //     'username' => 'required',
        //     'password' => 'required',
        //     'konPassword' => 'required',
        //     'namaPerusahaan' => 'required',
        //     'namaPemilik' => 'required',
        //     'kabupaten' => 'required',
        //     'npwp' => 'required',
        //     'alamat' => 'required',
        //     'email' => 'required|email',
        //     'noHp' => 'required',            

        // ],
        // [
        //     'username.required' => 'username wajib di isi',
        //     'password.required' => 'password wajib di isi',
        //     'konPassword.required' => 'konfirmasi password wajib di isi',
        //     'namaPerusahaan.required' => 'nama perusahaan wajib di isi',
        //     'namaPemilik.required' => 'nama pemilik wajib di isi',
        //     'kabupaten.required' => 'kabupaten wajib di isi',
        //     'npwp.required' => 'npwp wajib di isi',
        //     'alamat.required' => 'alamat wajib di isi',
        //     'email.required' => 'email wajib di isi',
        //     'email.email' => 'harap masukan email sesuai dengan formatnya',
        //     'noHP.required' => 'no hp wajib di isi',
        //     'noHp.Integer' => 'harap masukan angka',
        // ]
        // );

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

        Map::where('user_id', $user->id)
            ->update([
                'lat' => $request->lat,
                'lng' => $request->lng,
        ]);

        return redirect('/admin/dashboard')->with('status', 'Data berhasil di edit');
    }

    public function rubahSifat()
    {

        // $users = User::with('formSifat')->get();
        $data = FormSifat::with('user')->get(); 
        return view('admin.RubahSifat', compact('data'));
    }

    public function konfirmSifat(FormSifat $formSifat)
    {
        $data = FormSifat::find($formSifat->id);
        return view('admin.konfirmSifat', compact('data'));
    }

    public function storeKonfirmSifat(FormSifat $formSifat, Request $request)
    {
       
        $validatedData = $request->validate([
            'pesan' => 'required',        
        ],
        [
            'pesan.required' => 'Pesan wajib di isi'
        ]
        );
        
        FormSifat::where('id', $request->id)
            ->update([
                'konfirmasi' => $request->konfirmasi,
                'pesan_konfirmasi' => $request->pesan,
            ]);

        return redirect('/admin/data-rubah-sifat/')->with('status', 'Berhasil melakukan konfirmasi perizinan');
    }

    public function detailRubahSifat(FormSifat $formSifat)
    {
        $berkas = BerkasSifat::where('form_sifat_id', $formSifat->id)->get();
        $formSifat = FormSifat::with('berkasSifat')->find($formSifat->id);
        return view('admin.detailRubahSifat', compact('formSifat','berkas'));
    }
    
    public function viewEditSifat(FormSifat $formSifat)
    {
        return view('admin.editRubahSifat', compact('formSifat'));
    }

    public function storeEditSifat(FormSifat $formSifat, Request $request, User $user)
    {

        $validatedData = $request->validate([

            // 'noKendaraan' => 'required',
            // 'jenisPerizinan' => 'required',
            // 'namaPemilik' => 'required',
            // 'namaPemilikLama' => 'required',
            // 'namaPemilikBaru' => 'required',
            // 'alamat' => 'required',
            // 'merk' => 'required',
            // 'jenis' => 'required',
            // 'model' => 'required',
            // 'warna' => 'required',
            // 'tahun' => 'required',
            // 'silinder' => 'required',
            // 'noLandasan' => 'required',
            // 'noMesin' => 'required',
            // 'bpkb' => 'required',
            'suratPermohonan' => 'required',
            'suratPernyataan' => 'required',
            'fcStnk' => 'required',
            'fcBpkb' => 'required',
            'fcBukuUji' => 'required',
            'faktur' => 'required',
            'serut' => 'required',
            'docPerusahaan' => 'required',
            'dimensi' => 'required',
            'bengkel' => 'required',
            'depan' => 'required',
            'kiri' => 'required',
            'kanan' => 'required',
            'belakang' => 'required',
        ],
        [
            // 'noKendaraan.required' => 'No. Kendaraan  wajib di isi',
            // 'jenisPerizinan.required' => 'Jenis perubahan sifat wajib di isi',
            // 'alamat.required' => 'Alamat wajib di isi',
            // 'merk.required' => 'merk wajib di isi',
            // 'jenis.required' => 'Jenis wajib di isi',
            // 'model.required' => 'Model wajib di isi',
            // 'warna.required' => 'Warna wajib di isi',
            // 'tahun.required' => 'Tahun wajib di isi',
            // 'silinder.required' => 'Silinder wajib di isi',
            // 'noLandasan.required' => 'No. Landasan wajib di isi',
            // 'noMesin.required' => 'No. Mesin wajib di isi',
            // 'bpkb.required' => 'No. BPKB wajib di isi',
            'suratPermohonan.required' => 'Surat permohonan wajib di isi',
            'suratPernyataan.required' => 'Surat pernyataan wajib di isi',
            'fcStnk.required' => 'Foto FC STNK wajib di isi',
            'fcBpkb.required' => 'Foto FC BPKB wajib di isi',
            'fcBukuUji.required' => 'Foto buku uji wajib di isi',
            'faktur.required' => 'Foto faktur kendaraan wajib di isi',
            'serut.required' => 'Foto sertifikasi registrasi uji tipe wajib di isi',
            'docPerusahaan.required' => 'Dokumen perusahaan wajib di isi',
            'dimensi.required' => 'Surat dimensi kendaraan wajib di isi',
            'bengkel.required' => 'Foto surat keterangan bengkel wajib di isi',
            'depan.required' => 'Foto bagian depan kendaraan wajib di isi',
            'kiri.required' => 'Foto bagian kiri kendaraan wajib di isi',
            'kanan.required' => 'Foto bagian kanan kendaraan wajib di isi',
            'belakang.required' => 'Foto bagian belakang kendaraan wajib di isi',
        ]
        ); 

        $nameSuratPermohonan = $request->file('suratPermohonan')->getClientOriginalName();
        $nameSuratPernyataan = $request->file('suratPernyataan')->getClientOriginalName();
        $nameFcStnk = $request->file('fcStnk')->getClientOriginalName();
        $nameFcBpkb = $request->file('fcBpkb')->getClientOriginalName();
        $nameFcBukuUji = $request->file('fcBukuUji')->getClientOriginalName();

        if($request->ktp == null){
            $nameKtp = "";
        }

        else {
            $nameKtp = $request->ktp->getClientOriginalName();            
        }

        // $nameFcKTP = $request->file('fcKTP')->getClientOriginalName();
        $nameFaktur = $request->file('faktur')->getClientOriginalName();
        $nameSerut = $request->file('serut')->getClientOriginalName();
        $nameDocPerusahaan = $request->file('docPerusahaan')->getClientOriginalName();
        $nameSuratBengkel = $request->file('bengkel')->getClientOriginalName();
        $nameDimensi = $request->file('dimensi')->getClientOriginalName();
        $nameFotoDepan = $request->depan->getClientOriginalName();
        $nameFotoBelakang = $request->belakang->getClientOriginalName();
        $nameFotoKiri = $request->kiri->getClientOriginalName();
        $nameFotoKanan = $request->kanan->getClientOriginalName();

        if($request->akteNotaris == null){
            $nameAkteNotaris = "";
        }

        else {
            $nameAkteNotaris = $request->akteNotaris->getClientOriginalName();           
        }

        if($request->kbli == null){
            $nameKbli = "";
        }

        else {
            $nameKbli = $request->file('kbli')->getClientOriginalName();           
        }



        $suratPermohonan = $request->file('suratPermohonan')->storeAs(('Perizinan_Sifat/Surat_Permohonan'), $nameSuratPermohonan);
        $suratPernyataan = $request->file('suratPernyataan')->storeAs(('Perizinan_Sifat/Surat_Pernyataan'), $nameSuratPernyataan);
        $fcStnk = $request->file('fcStnk')->storeAs(('Perizinan_Sifat/FC_STNK'), $nameFcStnk);
        $fcBpkb = $request->file('fcBpkb')->storeAs(('Perizinan_Sifat/FC_BPKB'), $nameFcBpkb);
        $bukuUji = $request->file('fcBukuUji')->storeAs(('Perizinan_Sifat/FC_Buku_Uji'), $nameFcBukuUji);
        $dimensi = $request->file('dimensi')->storeAs(('Perizinan_Sifat/Dimensi_Kendaraan'), $nameDimensi);

        if($request->ktp == null){
            $ktp = "";
        }

        else{
            $ktp = $request->file('ktp')->storeAs(('Perizinan_Sifat/FC_KTP'), $nameKtp);    
        }

        $faktur = $request->file('faktur')->storeAs(('Perizinan_Sifat/Faktur'), $nameFaktur);
        $serut = $request->file('serut')->storeAs(('Perizinan_Sifat/Serut'), $nameSerut);
        $DocPerusahaan = $request->file('docPerusahaan')->storeAs(('Perizinan_Sifat/Doc_Perusahaan'), $nameDocPerusahaan);
        $bengkel = $request->file('bengkel')->storeAs(('Perizinan_Sifat/Surat_Bengkel'), $nameSuratBengkel);
        $fotoDepan = $request->depan->storeAs(('Perizinan_Sifat/Foto_Depan'), $nameFotoDepan);
        $fotoBelakang = $request->belakang->storeAs(('Perizinan_Sifat/Foto_Belakang'), $nameFotoBelakang);
        $fotoKiri = $request->kiri->storeAs(('Perizinan_Sifat/Foto_Kiri'), $nameFotoKiri);
        $fotoKanan = $request->kanan->storeAs(('Perizinan_Sifat/Foto_Kanan'), $nameFotoKanan);

        if($request->akteNotaris == null){
            $akteNotaris = "";
        }

        else{
            $akteNotaris = $request->file('akteNotaris')->storeAs(('Perizinan_Sifat/Akte_Notaris'), $nameAkteNotaris);           
        }

        if($request->kbli == null){
            $kbli = "";
        }

        else{
            $kbli = $request->file('kbli')->storeAs(('Perizinan_Sifat/KBLI'), $nameKbli); 
        }

        if($request->jenisPerizinan === "Perubahan Sifat (HITAM)"){
            
            FormSifat::where('id', $request->id)
            ->update([
                'nomor_kendaraan' => $request->noKendaraan,
                'jenis_perubahan' => $request->jenisPerizinan,
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
                'konfirmasi' => "Menunggu",
                'pesan_konfirmasi' => "-",        
            ]);

            BerkasSifat::where('form_sifat_id', $request->id)
            ->update([
                'surat_permohonan' => $nameSuratPermohonan,
                'surat_pernyataan' => $nameSuratPernyataan,
                'fc_stnk' => $fcStnk,
                'fc_bpkb' => $fcBpkb,
                'dimensi_kendaraan' => $dimensi,
                'fc_buku_uji' => $bukuUji,
                'foto_faktur' => $faktur,
                'foto_serut' => $serut,
                'surat_bengkel' => $bengkel,
                'doc_perusahaan' => $DocPerusahaan,
                'foto_depan' => $fotoDepan,
                'foto_belakang' => $fotoBelakang,
                'foto_kiri' => $fotoKiri,
                'foto_kanan' => $fotoKanan,
            ]);

            return redirect('/admin/data-rubah-sifat')->with('status', 'Data berhasil di edit');

        }

        elseif($request->jenisPerizinan === "Perubahan Sifat (HITAM) BBN"){
            
            FormSifat::where('id', $request->id)
            ->update([
                'nomor_kendaraan' => $request->noKendaraan,
                'jenis_perubahan' => $request->jenisPerizinan,
                'nama_pemilik_lama' => $request->namaPemilikLama,
                'nama_pemilik_baru' => $request->namaPemilikBaru,
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
                'konfirmasi' => "Menunggu",
                'pesan_konfirmasi' => "-",        
            ]);

            BerkasSifat::where('form_sifat_id', $request->id)
            ->update([
                'surat_permohonan' => $nameSuratPermohonan,
                'surat_pernyataan' => $nameSuratPernyataan,
                'fc_stnk' => $fcStnk,
                'fc_ktp' => $ktp,
                'fc_bpkb' => $fcBpkb,
                'dimensi_kendaraan' => $dimensi,
                'fc_buku_uji' => $bukuUji,
                'foto_faktur' => $faktur,
                'foto_serut' => $serut,
                'surat_bengkel' => $bengkel,
                'doc_perusahaan' => $DocPerusahaan,
                'foto_depan' => $fotoDepan,
                'foto_belakang' => $fotoBelakang,
                'foto_kiri' => $fotoKiri,
                'foto_kanan' => $fotoKanan,
            ]);

            return redirect('/admin/data-rubah-sifat')->with('status', 'Data berhasil di edit');

        }

        elseif($request->jenisPerizinan === "Penetapan Sifat (KUNING)" || $request->jenisPerizinan === "Perubahan Sifat (HITAM KE KUNING)"){
            
            FormSifat::where('id', $request->id)
            ->update([
                'nomor_kendaraan' => $request->noKendaraan,
                'jenis_perubahan' => $request->jenisPerizinan,
                'nama_pemilik_lama' => $request->namaPemilikLama,
                'nama_pemilik_baru' => $request->namaPemilikBaru,
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
                'konfirmasi' => "Menunggu",
                'pesan_konfirmasi' => "-",        
            ]);

            BerkasSifat::where('form_sifat_id', $request->id)
            ->update([
                'surat_permohonan' => $nameSuratPermohonan,
                'surat_pernyataan' => $nameSuratPernyataan,
                'fc_stnk' => $fcStnk,
                'fc_bpkb' => $fcBpkb,
                'dimensi_kendaraan' => $dimensi,
                'fc_buku_uji' => $bukuUji,
                'foto_faktur' => $faktur,
                'foto_serut' => $serut,
                'surat_bengkel' => $bengkel,
                'doc_perusahaan' => $DocPerusahaan,
                'foto_depan' => $fotoDepan,
                'foto_belakang' => $fotoBelakang,
                'foto_kiri' => $fotoKiri,
                'foto_kanan' => $fotoKanan,
                'akte_notaris' => $akteNotaris,
                'kbli' => $kbli,
            ]);
            return redirect('/admin/data-rubah-sifat')->with('status', 'Data berhasil di edit');
        }
        
    }

    public function berkasPermohonan($namaFile)
    {
        return Storage::download('Perizinan_Sifat/Surat_Permohonan/'.$namaFile);
    }

    public function berkasPernyataan($namaFile)
    {
        
        return Storage::download('Perizinan_Sifat/Surat_Pernyataan/'.$namaFile);
    }

    public function rubahBentuk()
    {
        $data = FormBentuk::with('user')->get();
        return view('admin.RubahBentuk', compact('data'));
    }

    public function konfirmBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::find($formBentuk->id);
        return view('admin.konfirmBentuk', compact('data'));
    }

    public function storeKonfirmBentuk(FormBentuk $formBentuk, Request $request)
    {
        $validatedData = $request->validate([
            'pesan' => 'required',        
        ],
        [
            'pesan.required' => 'Pesan wajib di isi'
        ]
        );
        
        FormBentuk::where('id', $request->id)
            ->update([
                'konfirmasi' => $request->konfirmasi,
                'pesan_konfirmasi' => $request->pesan,
            ]);

        return redirect('/admin/data-rubah-bentuk/')->with('status', 'Berhasil melakukan konfirmasi perizinan');
    }

    public function detailRubahBentuk(FormBentuk $formBentuk)
    {
        $foto = BerkasBentuk::where('form_bentuk_id', $formBentuk->id)->get();
        return view('admin.detailRubahBentuk', compact('formBentuk', 'foto'));
    }

    public function storeEditBentuk(FormBentuk $formBentuk, Request $request)
    {
        $validatedData = $request->validate([

            // 'noKendaraan' => 'required',
            // 'namaPemilikLama' => 'required',
            // 'namaPemilikBaru' => 'required',
            // 'perubahanBentuk' => 'required',
            // 'alamat' => 'required',
            // 'merk' => 'required',
            // 'jenis' => 'required',
            // 'warna' => 'required',
            // 'tahun' => 'required',
            // 'silinder' => 'required',
            // 'noLandasan' => 'required',
            // 'noMesin' => 'required',
            // 'bpkb' => 'required',
            // 'noUji' => 'required',
            'depan' => 'required',
            'belakang' => 'required',
            'kanan' => 'required',
            'kiri' => 'required',

        ],
        [
            // 'noKendaraan.required' => 'No. Kendaraan  wajib di isi',
            // 'namaPemilikLama.required' => 'Nama pemilik lama wajib di isi',
            // 'namaPemilikBaru.required' => 'Nama pemilik baru wajib di isi',
            // 'perubahanBentuk.required' => 'Perubahan bentuk wajib di isi',
            // 'alamat.required' => 'Alamat wajib di isi',
            // 'merk.required' => 'merk wajib di isi',
            // 'jenis.required' => 'Jenis wajib di isi',
            // 'warna.required' => 'Warna wajib di isi',
            // 'tahun.required' => 'Tahun wajib di isi',
            // 'silinder.required' => 'Silinder wajib di isi',
            // 'noLandasan.required' => 'No. Landasan wajib di isi',
            // 'noMesin.required' => 'No. Mesin wajib di isi',
            // 'bpkb.required' => 'No. BPKB wajib di isi',
            // 'noUji.required' => 'No. Uji wajib di isi',
            'depan.required' => 'Foto bagian depan kendaraan wajib di isi',
            // 'depan.mimes' => 'Harap masukan foto bertipe jpg/png/jpeg',
            // 'kiri.mimes' => 'Harap masukan foto bertipe jpg/png/jpeg',
            'kiri.required' => 'Foto bagian kiri kendaraan wajib di isi',
            // 'kanan.mimes' => 'Harap masukan foto bertipe jpg/png/jpeg',
            'kanan.required' => 'Foto bagian kanan kendaraan wajib di isi',
            // 'belakang.mimes' => 'Harap masukan foto bertipe jpg/png/jpeg',
            'belakang.required' => 'Foto bagian belakang kendaraan wajib di isi',
        ]
        );


        $nameFotoDepan = $request->depan->getClientOriginalName();
        $nameFotoBelakang = $request->belakang->getClientOriginalName();
        $nameFotoKiri = $request->kiri->getClientOriginalName();
        $nameFotoKanan = $request->kanan->getClientOriginalName();

        $fotoDepan = $request->depan->storeAs(('Perizinan_Bentuk/Foto_Depan'), $nameFotoDepan);
        $fotoBelakang = $request->belakang->storeAs(('Perizinan_Bentuk/Foto_Belakang'), $nameFotoBelakang);
        $fotoKiri = $request->kiri->storeAs(('Perizinan_Bentuk/Foto_Kiri'), $nameFotoKiri);
        $fotoKanan = $request->kanan->storeAs(('Perizinan_Bentuk/Foto_Kanan'), $nameFotoKanan);

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
            'konfirmasi' => "Menunggu",
            'pesan_konfirmasi' => "-",  
         ]);

         BerkasBentuk::where('form_bentuk_id', $request->id)
         ->update([
             'foto_depan' => $fotoDepan,
             'foto_belakang' => $fotoBelakang,
             'foto_kiri' => $fotoKiri,
             'foto_kanan' => $fotoKanan,
         ]);

         return redirect('/admin/data-rubah-bentuk')->with('status', 'Data berhasil di edit');

    }

    public function laporan(Laporan $laporan)
    {
        $data = Laporan::all();

        return view('admin.laporan', compact('data'));
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
