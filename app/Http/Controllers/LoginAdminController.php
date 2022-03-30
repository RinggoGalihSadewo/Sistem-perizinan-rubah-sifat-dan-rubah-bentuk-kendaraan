<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LoginAdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ],
        [
            'username.required' => 'username wajib di isi',
            'password.required' => 'password wajib di isi'
        ]);

        $role = ['superadmin','rs-admin','rs-staff','rs-kasi','rs-kabid','sekretaris','kepala-dinas','rb-admin','rb-kasi','rb-kabid'];

        if (\Auth::attempt(['username' => $request->username, 'password' => $request->password, 'role' => $role])) {
            
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
          
        }
        
        return redirect('/login')->with('status', 'Admin tidak terdaftar !');
    }

    public function logout(Request $request)
    {
    	\Auth::logout();

    	$request->session()->invalidate();
    	$request->session()->regenerateToken();

    	return redirect('/login');

    }

    public function viewTambahAdmin()
    {
        return view('admin.tambahAdmin');
    }

    public function storeTambahAdmin(User $user, Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'nama_perusahaan' => "-",
            'nama_pemilik' => $request->namaPemilik,
            'nama_perusahaan' => "-",
            'kabupaten' => "-",
            'npwp' => "-",
            'alamat' => "-",
            'email' => "-",
            'no_hp' => "-",
            'foto_profile' => "-"
        ]);
        return redirect('admin/tambah-admin')->with('status', 'Berhasil menambahkan admin !');
    }
}
