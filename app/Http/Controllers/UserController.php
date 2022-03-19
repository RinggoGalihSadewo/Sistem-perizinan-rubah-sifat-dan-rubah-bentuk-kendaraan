<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Map;
use App\Models\FormSifat;
use App\Models\BerkasSifat;
use App\Models\FormBentuk;
use App\Models\BerkasBentuk;
use App\Models\TrackSuratSifat;
use App\Models\TrackSuratBentuk;
use App\Models\Laporan;

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
    public function halamanBeranda()
    {
        return view('client.halamanBeranda');
    }

    public function masuk()
    {
        return view('client.login2');
    }

    public function sifatSuratPermohonan()
    {
        $path = storage_path('app/public/Persyaratan_Sifat/SURAT_PERMOHONAN.docx');
        return response()->download($path);
    }

    public function sifatSuratPernyataan()
    {
        $path = storage_path('app/public/Persyaratan_Sifat/SURAT PERNYATAAN.docx');
        return response()->download($path);
    }

    public function sifatDimensi()
    {
        $path = storage_path('app/public/Persyaratan_Sifat/form dimensi kendaraan baru.pdf');
        return response()->download($path);
    }

    public function sifatPersyaratan()
    {
        $path = storage_path('app/public/Persyaratan_Sifat/PERSYARATAN RUBAH SIFAT.pdf');
        return response()->download($path);
    }

    public function storeLaporan(Request $request)
    {
        Laporan::create([
            'kritik' => $request->kritik,
            'saran' => $request->saran
        ]);

        return redirect('/')->with('laporan', 'Berhasil mengirimkan laporan');
    }

    public function forgotPassword()
    {
        return view('client.forgotPassword2');
    }

    public function rubahSifat()
    {
        return view('client.rubahSifat');
    }

    public function profile(User $user)
    {
        $data = User::where('id', Auth::user()->id)->get();
        return view('client.profile', compact('data'));
    }

    public function editProfile(User $user, Request $request)
    {   
        if($request->profile == null)
        {
            $foto = $request->nullProfile;
        }
        
        else
        {
            $nameFoto = $request->profile->getClientOriginalName();
            $foto = $request->profile->storeAs(('profile'), $nameFoto);
        }

        User::where('id', Auth::user()->id)
            ->update([
                'nama_pemilik' => $request->nama,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_hp' => $request->noHp,
                'foto_profile' => $foto
        ]);

        return redirect('/profile')->with('status', 'Profile berhasil di ubah');

    }

    public function alurKordinasi(FormSifat $formSifat, FormBentuk $formBentuk)
    {
        $data = FormSifat::where('user_id', Auth::user()->id)->get();
        $data2 = FormBentuk::where('user_id', Auth::user()->id)->get();
        return view('client.alur', compact('data', 'data2'));
    }

    public function perbaikanSifat(FormSifat $formSifat)
    {
        $data = FormSifat::find($formSifat);
        
        return view('client.perbaikanRubahSifat', compact('data'));
    }

    public function storePerbaikanSifat(FormSifat $formSifat, Request $request, BerkasSifat $berkasSifat)
    {

        $validatedData = $request->validate([

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
                'user_id' => Auth::user()->id,
                'nomor_kendaraan' => $request->noKendaraan,
                'jenis_perubahan' => $request->jenisPerizinan,
                'nama_pemilik' => $request->namaPemilik,
                'alamat' => $request->alamat,
                'merk' => $request->merk,
                'jenis' => $request->jenis,
                'model' => $request->model,
                'warna' => $request->warna,
                'tahun' => $request->tahun,
                'isi_silinder' => $request->silinder,
                'no_landasan' => $request->noLandasan,
                'no_mesin' => $request->noMesin,
                'no_bpkb' => $request->bpkb,
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

            return redirect('/alur-kordinasi')->with('status', 'Berhasil memperbaiki surat');

        }

        elseif($request->jenisPerizinan === "Perubahan Sifat (HITAM) BBN"){
            
            FormSifat::where('id', $request->id)
            ->update([
                'user_id' => Auth::user()->id,
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
                'isi_silinder' => $request->silinder,
                'no_landasan' => $request->noLandasan,
                'no_mesin' => $request->noMesin,
                'no_bpkb' => $request->bpkb,
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

            return redirect('/alur-kordinasi')->with('status', 'Berhasil memperbaiki surat');

        }

        elseif($request->jenisPerizinan === "Penetapan Sifat (KUNING)" || $request->jenisPerizinan === "Perubahan Sifat (HITAM KE KUNING)"){
            
            FormSifat::where('id', $request->id)
            ->update([
                'user_id' => Auth::user()->id,
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
                'isi_silinder' => $request->silinder,
                'no_landasan' => $request->noLandasan,
                'no_mesin' => $request->noMesin,
                'no_bpkb' => $request->bpkb,
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

            return redirect('/alur-kordinasi')->with('status', 'Berhasil memperbaiki surat');
        }

    }

    public function perbaikanBentuk(FormBentuk $formBentuk)
    {
        $data = FormBentuk::find($formBentuk);
        
        return view('client.perbaikanRubahBentuk', compact('data'));
    }

    public function storePerbaikanBentuk(FormBentuk $formBentuk, Request $request, BerkasBentuk $berkasBentuk)
    {

        $validatedData = $request->validate([

            'noKendaraan' => 'required|not_regex:/[`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'namaPemilikLama' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'namaPemilikBaru' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'perubahanBentuk' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=>.,<?;:{}]+/',
            'alamat' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'merk' => 'required|not_regex:/[`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'jenis' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'warna' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'tahun' => 'required|not_regex:/[`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'silinder' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'noLandasan' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'noMesin' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'bpkb' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'noUji' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'depan' => 'required',
            'belakang' => 'required',
            'kanan' => 'required',
            'kiri' => 'required',

        ],
        [
            'noKendaraan.required' => 'No. Kendaraan  wajib di isi',
            'namaPemilikLama.required' => 'Nama pemilik lama wajib di isi',
            'namaPemilikBaru.required' => 'Nama pemilik baru wajib di isi',
            'perubahanBentuk.required' => 'Perubahan bentuk wajib di isi',
            'alamat.required' => 'Alamat wajib di isi',
            'merk.required' => 'merk wajib di isi',
            'jenis.required' => 'Jenis wajib di isi',
            'warna.required' => 'Warna wajib di isi',
            'tahun.required' => 'Tahun wajib di isi',
            'silinder.required' => 'Silinder wajib di isi',
            'noLandasan.required' => 'No. Landasan wajib di isi',
            'noMesin.required' => 'No. Mesin wajib di isi',
            'bpkb.required' => 'No. BPKB wajib di isi',
            'noUji.required' => 'No. Uji wajib di isi',
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

        FormBentuk::where('id', $request->id)
        ->update([
            'user_id' => Auth::user()->id,
            'nomor_kendaraan' => $request->noKendaraan,
            'perubahan_bentuk' => $request->perubahanBentuk,
            'nama_pemilik_lama' => $request->namaPemilikLama,
            'nama_pemilik_baru' => $request->namaPemilikBaru,
            'alamat' => $request->alamat,
            'merk' => $request->merk,
            'jenis' => $request->jenis,
            'warna' => $request->warna,
            'tahun' => $request->tahun,
            'volume_silinder' => $request->silinder,
            'no_landasan' => $request->noLandasan,
            'no_mesin' => $request->noMesin,
            'no_bpkb' => $request->bpkb,
            'no_uji' => $request->noUji,
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

        return redirect('/alur-kordinasi')->with('status', 'Berhasil memperbaiki surat');

    }

    public function storeSifat(Request $request)
    {
        
        $validatedData = $request->validate([

            'noKendaraan' => 'required',
            'jenisPerizinan' => 'required',
            'namaPemilik' => 'required',
            'namaPemilikLama' => 'required',
            'namaPemilikBaru' => 'required',
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
            'noKendaraan.required' => 'No. Kendaraan  wajib di isi',
            'jenisPerizinan.required' => 'Jenis perubahan sifat wajib di isi',
            'alamat.required' => 'Alamat wajib di isi',
            'merk.required' => 'merk wajib di isi',
            'jenis.required' => 'Jenis wajib di isi',
            'model.required' => 'Model wajib di isi',
            'warna.required' => 'Warna wajib di isi',
            'tahun.required' => 'Tahun wajib di isi',
            'silinder.required' => 'Silinder wajib di isi',
            'noLandasan.required' => 'No. Landasan wajib di isi',
            'noMesin.required' => 'No. Mesin wajib di isi',
            'bpkb.required' => 'No. BPKB wajib di isi',
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


        $formSifat = new FormSifat;

        $formSifat->user_id = Auth::user()->id;
        $formSifat->nomor_kendaraan = $request->noKendaraan;
        $formSifat->jenis_perubahan = $request->jenisPerizinan;
        $formSifat->nama_pemilik = $request->namaPemilik;
        $formSifat->nama_pemilik_lama = $request->namaPemilikLama;
        $formSifat->nama_pemilik_baru = $request->namaPemilikBaru;
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
        $formSifat->konfirmasi = "Menunggu";
        $formSifat->pesan_konfirmasi = "-";
        $formSifat->save();

        $BerkasSifat = new BerkasSifat;

        $BerkasSifat->form_sifat_id = $formSifat->id;
        $BerkasSifat->surat_permohonan = $nameSuratPermohonan;
        $BerkasSifat->surat_pernyataan = $nameSuratPernyataan;
        $BerkasSifat->fc_stnk = $fcStnk;
        $BerkasSifat->fc_bpkb = $fcBpkb;
        $BerkasSifat->fc_ktp = $ktp;
        $BerkasSifat->dimensi_kendaraan = $dimensi;
        $BerkasSifat->fc_buku_uji = $bukuUji;
        $BerkasSifat->foto_faktur = $faktur;
        $BerkasSifat->foto_serut = $serut;
        $BerkasSifat->surat_bengkel = $bengkel;
        $BerkasSifat->doc_perusahaan = $DocPerusahaan;
        $BerkasSifat->foto_depan = $fotoDepan;
        $BerkasSifat->foto_belakang = $fotoBelakang;
        $BerkasSifat->foto_kiri = $fotoKiri;
        $BerkasSifat->foto_kanan = $fotoKanan;
        $BerkasSifat->akte_notaris = $akteNotaris;
        $BerkasSifat->kbli = $kbli;
        $BerkasSifat->save();

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

            'noKendaraan' => 'required|not_regex:/[`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'namaPemilikLama' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'namaPemilikBaru' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'perubahanBentuk' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=>.,<?;:{}]+/',
            'alamat' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'merk' => 'required|not_regex:/[`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'jenis' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'warna' => 'required|not_regex:/[0-9`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'tahun' => 'required|not_regex:/[`~!@#$%^&*()_+=->.,<?;:{}]+/',
            'silinder' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'noLandasan' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'noMesin' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'bpkb' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'noUji' => 'required|not_regex:/[`~!@#$%^&*()_+=>,<?;:{}]+/',
            'depan' => 'required',
            'belakang' => 'required',
            'kanan' => 'required',
            'kiri' => 'required',

        ],
        [
            'noKendaraan.required' => 'No. Kendaraan  wajib di isi',
            'namaPemilikLama.required' => 'Nama pemilik lama wajib di isi',
            'namaPemilikBaru.required' => 'Nama pemilik baru wajib di isi',
            'perubahanBentuk.required' => 'Perubahan bentuk wajib di isi',
            'alamat.required' => 'Alamat wajib di isi',
            'merk.required' => 'merk wajib di isi',
            'jenis.required' => 'Jenis wajib di isi',
            'warna.required' => 'Warna wajib di isi',
            'tahun.required' => 'Tahun wajib di isi',
            'silinder.required' => 'Silinder wajib di isi',
            'noLandasan.required' => 'No. Landasan wajib di isi',
            'noMesin.required' => 'No. Mesin wajib di isi',
            'bpkb.required' => 'No. BPKB wajib di isi',
            'noUji.required' => 'No. Uji wajib di isi',
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

        $FormBentuk = new FormBentuk;

        $FormBentuk->user_id = Auth::user()->id;
        $FormBentuk->nomor_kendaraan = $request->noKendaraan;
        $FormBentuk->perubahan_bentuk = $request->perubahanBentuk;
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
        $FormBentuk->konfirmasi = "Menunggu";
        $FormBentuk->pesan_konfirmasi = "-";

        $FormBentuk->save();

        $BerkasBentuk = new BerkasBentuk;

        $BerkasBentuk->form_bentuk_id = $FormBentuk->id;
        $BerkasBentuk->foto_depan = $fotoDepan;
        $BerkasBentuk->foto_belakang = $fotoBelakang;
        $BerkasBentuk->foto_kiri = $fotoKiri;
        $BerkasBentuk->foto_kanan = $fotoKanan;

        $BerkasBentuk->save();

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
