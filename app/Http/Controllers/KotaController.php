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
        return view('dashboard.admin.kota.index', ['kota'=>$kota], compact('negara'));
    }


    public function edit($id_kota){
        $kota = Kota::find($id_kota);
        return view('dashboard.admin.kota.index', ['kota'=>$kota]);
    }

    public function update(Request $request, $id_kota){
        $kota = Kota::find($id_kota);
        $kota->update($request->all());

        return redirect('/negara');
    }

    
}
