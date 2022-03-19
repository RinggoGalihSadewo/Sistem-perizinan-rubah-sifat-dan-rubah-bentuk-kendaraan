<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        return redirect('/login')->with('status', 'Username atau password anda salah !');
    }

    public function logout(Request $request)
    {
    	\Auth::logout();

    	$request->session()->invalidate();
    	$request->session()->regenerateToken();

    	return redirect('/login');

    }
}
