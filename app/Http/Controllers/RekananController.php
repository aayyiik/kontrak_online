<?php

namespace App\Http\Controllers;

use App\Models\Rekanan;
use Illuminate\Http\Request;

class RekananController extends Controller
{
    public function index(){
        $rekanan = Rekanan::all();
        return view('dashboard.admin.rekanan.index', ['rekanan'=>$rekanan]);
    }
}
