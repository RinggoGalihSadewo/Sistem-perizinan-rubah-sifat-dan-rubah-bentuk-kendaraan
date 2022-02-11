<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Map;

class LoginController extends Controller
{
    //
    public function registrasi(Request $request)
    {
        $validatedData = $request->validate([

            'username' => 'required',
            'password' => 'required',
            'namaPerusahaan' => 'required',
            'namaPemilik' => 'required',
            'kabupaten' => 'required',
            'npwp' => 'required',
            'alamat' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'email' => 'required|email',
            'noHp' => 'required',            

        ],
        [
            'username.required' => 'username wajib di isi',
            'password.required' => 'password wajib di isi',
            'namaPerusahaan.required' => 'nama perusahaan wajib di isi',
            'namaPemilik.required' => 'nama pemilik wajib di isi',
            'kabupaten.required' => 'kabupaten wajib di isi',
            'npwp.required' => 'npwp wajib di isi',
            'alamat.required' => 'alamat wajib di isi',
            'lat.required' => 'masukan nilai lattitude',
            'lng.required' => 'masukan nilai longtitude',
            'email.required' => 'email wajib di isi',
            'email.email' => 'harap masukan email sesuai dengan formatnya',
            'noHP.required' => 'no hp wajib di isi',
  
        ]
        );

        $password = bcrypt($validatedData['password']);

        $user = new User;

        $user->username = $request->username;
        $user->password = $password;
        $user->nama_perusahaan = $request->namaPerusahaan;
        $user->nama_pemilik = $request->namaPemilik;
        $user->kabupaten = $request->kabupaten;
        $user->npwp = $request->npwp;
        $user->alamat = $request->alamat;
        $user->email = $request->email;
        $user->no_hp = $request->noHp;
        $user->save();

        $map = new Map;

        $map->user_id = $user->id;
        $map->lat = $request->lat;
        $map->lng = $request->lng;
        $map->save();

        // User::create([
        //     'username' => $request->username,
        //     'password' => $request->password,
        //     'nama_perusahaan' => $request->namaPerusahaan,
        //     'kabupaten' => $request->kabupaten,
        //     'npwp' => $request->npwp,
        //     'alamat' => $request->alamat,
        //     'email' => $request->email,
        //     'no_hp' => $request->noHp
        // ]);

        // Map::create([
        //     'user_id' => $user->id,
        //     'lat' => $request->lat,
        //     'lng' => $request->lng
        // ]);

        return redirect('/')->with('status', 'Pendaftaran Akun Berhasil !');
    }

    public function authenticate(Request $request)
    {
        $ingat = $request->remember ? true : false;

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ],
        [
            'username.required' => 'username wajib di isi',
            'password.required' => 'password wajib di isi'
        ]);

        if (Auth::attempt($credentials, $ingat)) {
            $request->session()->regenerate();

            return redirect()->intended('/perizinan-rubah-sifat');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
    	Auth::logout();

    	$request->session()->invalidate();
    	$request->session()->regenerateToken();

    	return redirect('/');

    }
}
