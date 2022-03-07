<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }
}
