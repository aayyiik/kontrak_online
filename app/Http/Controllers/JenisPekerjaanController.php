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

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_jepe' => 'required|unique:bagian,kode_jepe',
            'nama_jepe' => 'required|min:1|max:100',
        ]);

        JenisPekerjaan::create($request->all());
        return redirect('/jenispekerjaan');
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

    public function delete ($id){
        $jepe = JenisPekerjaan::find($id);
        $jepe->delete($jepe);
        return redirect('/jenispekerjaan');
    }
}
