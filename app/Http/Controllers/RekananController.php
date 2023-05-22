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

    public function store(Request $request)
    {
   
        $this->validate($request, [
            'no_rekanan' => 'required|unique:bagian,no_rekanan',
            'nama_rekanan' => 'required',
            'alamat' => 'required',
            'no_sap' => 'required',
            'nama_direktur' => 'required',
            'email_perusahaan' => 'required',
            'status_rekanan' => 'required'

        ]);

        Rekanan::create($request->all());
        return redirect('/rekanan');
    }

    public function delete ($id){
        $rekanan = Rekanan::find($id);
        $rekanan->delete($rekanan);
        return redirect('/rekanan');
    }
}
