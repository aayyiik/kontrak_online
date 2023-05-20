<?php

namespace App\Http\Controllers;

use App\Models\Status_Approve;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        $status = Status_Approve::all();
        return view('dashboard.admin.status.index', ['status'=>$status]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_status' => 'required|unique:bagian,kode_status',
            'nama_status' => 'required|min:1|max:100',
        ]);

        Status_Approve::create($request->all());
        return redirect('/status');
    }

    public function edit($id_status){
        $status = Status_Approve::find($id_status);
        return view('dashboard.admin.status.edit', ['status'=>$status]);
    }

    public function update(Request $request, $id_status){
        $status = Status_Approve::find($id_status);
        $status->update($request->all());
        return redirect('/status');
    }


}
