<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function rubahBentuk()
    {
        return view('client.rubahBentuk');
    }

    public function registrasi(Request $request)
    {
        $validate = $request->validate([

            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|integer',
            'password' => 'required',
            'alamat' => 'required',
            'foto_profile' => 'required',
            'long' => 'required',
            'lat' => 'required'

        ],
        [
            'nama.required' => 'nama wajib di isi',
            'email.required' => 'email wajib di isi',
            'email.required' => 'email wajib di isi',
            'email.email' => 'harap masukan email sesuai dengan formatnya',
            'no_hp.required' => 'no hp wajib di isi',
            'no_hp.integer' => 'harap masukan angka',
            'password.required' => 'password wajib di isi',
            'alamat.required' => 'alamat wajib di isi',
            'foto_profile.required' => 'masukan foto anda',
            'long.required' => 'masukan nilai longtitude',
            'lat.required' => 'masukan nilai lattitude'
        ]
        );
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
