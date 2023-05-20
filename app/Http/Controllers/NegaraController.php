<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    public function index(){
        $negara = Negara::all();
        return view('dashboard.admin.negara.index', ['negara'=>$negara]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_negara' => 'required|unique:bagian,kode_negara',
            'nama_negara' => 'required|min:1|max:100',
        ]);

        Negara::create($request->all());
        return redirect('/negara');
    }

    public function edit($id_negara){
        $negara = Negara::find($id_negara);
        return view('dashboard.admin.negara.edit', ['negara'=>$negara]);
    }

    public function update(Request $request, $id_negara){
        $negara = Negara::find($id_negara);
        $negara->update($request->all());
        return redirect('/negara');
    }
}
