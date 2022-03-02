<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Pengumuman;
use App\Mail\PesanSifat;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\FormSifat;
use App\Models\FormBentuk;

class NotifikasiController extends Controller
{
    //
    public function pengumuman()
    {
        return view('admin.pengumuman');
    }

    public function storePengumuman(Request $request, User $user)
    {

        $details = [

            'title' => $request->judul,
            'body' => $request->isi,
            'file' => $request->file('file')

        ];

        for($i=0;$i<User::count();$i++)
        {
            $email = User::get('email');
            Mail::to($email[$i]->email)->send(new \App\Mail\Pengumuman($details));
        }
        return redirect('/admin/pengumuman')->with('status', 'Berhasil mengirimkan pengumuman ke semua pengguna');
    }

    public function pesanSifat($formSifat)
    {
        $data = FormSifat::find($formSifat);
        return view('admin.pesanSifat', compact('data'));
    }

    public function storePesanSifat(Request $request, User $user)
    {

        $details = [
            'email' => $request->email,
            'title' => $request->judul,
            'body' => $request->isi,
            'file' => $request->file('file')

        ];

        Mail::to($details['email'])->send(new \App\Mail\Pengumuman($details));
        
        return redirect('/admin/data-rubah-sifat')->with('status', 'Berhasil mengirimkan pesan');
    }

    public function pesanBentuk($formBentuk)
    {
        $data = FormBentuk::find($formBentuk);
        return view('admin.pesanBentuk', compact('data'));
    }

    public function storePesanBentuk(Request $request, User $user)
    {

        $details = [
            'email' => $request->email,
            'title' => $request->judul,
            'body' => $request->isi,
            'file' => $request->file('file')

        ];

        Mail::to($details['email'])->send(new \App\Mail\Pengumuman($details));
        
        return redirect('/admin/data-rubah-bentuk')->with('status', 'Berhasil mengirimkan pesan');
    }

    public function suratSifat($formSifat)
    {
        $data = FormSifat::find($formSifat);
        return view('admin.kirimSuratSifat', compact('data'));
    }

    public function storeSuratSifat(Request $request)
    {
        $details = [
            'email' => $request->email,
            'title' => $request->judul,
            'body' => $request->isi,
            'file' => $request->file('file')

        ];

        Mail::to($details['email'])->send(new \App\Mail\Pengumuman($details));
        
        return redirect('/admin/data-qr-code/rubah-sifat')->with('status', 'Berhasil mengirimkan pesan');
    }

        public function suratBentuk($formBentuk)
    {
        $data = FormBentuk::find($formBentuk);
        return view('admin.kirimSuratBentuk', compact('data'));
    }

    public function storeSuratBentuk(Request $request)
    {
        $details = [
            'email' => $request->email,
            'title' => $request->judul,
            'body' => $request->isi,
            'file' => $request->file('file')

        ];

        Mail::to($details['email'])->send(new \App\Mail\Pengumuman($details));
        
        return redirect('/admin/data-qr-code/rubah-bentuk')->with('status', 'Berhasil mengirimkan pesan');
    }
}
