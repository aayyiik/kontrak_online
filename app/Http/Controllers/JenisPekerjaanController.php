<?php

namespace App\Http\Controllers;

use App\Models\JenisPekerjaan;
use Illuminate\Http\Request;

class JenisPekerjaanController extends Controller
{
    public function index(){
        $jepe = JenisPekerjaan::all();
        return view('dashboard.admin.jenispekerjaan.index', ['jepe'=> $jepe]);
    }

    public function edit($id_jepe){
        $jepe = JenisPekerjaan::find($id_jepe);
        return view('dashboard.admin.jenispekerjaan.edit', ['jepe'=>$jepe]);
    }

    public function update(Request $request, $id_jepe){
        $jepe = JenisPekerjaan::find($id_jepe);
        $jepe->update($request->all());
        return redirect('/jenispekerjaan');
    }
}
