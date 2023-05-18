<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index(){
        $unit = UnitKerja::all();
        return view('dashboard.admin.unit.index',['unit'=>$unit]);
    }

    public function edit($id_unit){
        $unit = UnitKerja::find($id_unit);
        return view('dashboard.admin.unit.edit', ['unit'=>$unit]);
    }

    public function update(Request $request, $id_unit){
        $unit = UnitKerja::find($id_unit);
        $unit->update($request->all());
        return redirect('/unitkerja');
    }
}
