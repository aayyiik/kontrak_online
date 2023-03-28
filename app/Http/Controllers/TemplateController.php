<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('form.addtemplate');
    }

    public function store(Request $request){
        $data['nama_rekanan'] = $request->nama_rekanan;
        $data['nama_pengadaan'] = $request->nama_pengadaan;
        $data['nama_pekerjaan'] = $request->nama_pekerjaan;
        $data['no_kontrak_dof'] = $request->no_kontrak_dof;

        return view('form.rekanan.srpenunjukrekanan', $data);
    }
}
