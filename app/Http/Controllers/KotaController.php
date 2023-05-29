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

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_kota' => 'required|unique:bagian,kode_kota',
            'id_negara' => 'required',
            'nama_kota' => 'required|min:1|max:100',
        ]);

        Kota::create($request->all());
        return redirect('/kota');
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

    public function delete ($id){
        $kota = Kota::find($id);
        $kota->delete($kota);
        return redirect('/kota');
    }
    
}
