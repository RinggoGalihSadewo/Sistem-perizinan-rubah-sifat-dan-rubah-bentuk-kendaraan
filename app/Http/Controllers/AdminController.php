<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Map;

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
        return view('admin.RubahSifat');
    }

    public function rubahBentuk()
    {
        return view('admin.RubahBentuk');
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
