<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function index(){
        return view('ttd_coba1.index');
    }

    public function create(){
        return view('ttd_coba1.create');
    }


}
