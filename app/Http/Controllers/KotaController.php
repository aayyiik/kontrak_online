<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Negara;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        $kota = Kota::all();
        $negara = Negara::all();
        return view('dashboard.admin.kota', ['kota'=>$kota], compact('negara'));
    }
}
