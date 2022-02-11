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

use QrCode;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return view('admin.index', compact('users'));
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

    public function qrCode()
    {
        return view('admin.dataQr');
    }

    public function generateRubahSifat()
    {
        return view('admin.genRubahSifat');
    }

    public function generateRubahBentuk()
    {
        return view('admin.genRubahBentuk');
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
