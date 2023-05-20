<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index()
    {
        $bagian = Bagian::all();
        // dd($bagian);
        return view('dashboard.admin.bagian.index', ['bagian' => $bagian]);
    }

    // public function create()
    // {
    //     return view('dashboard.admin.bagian.create');
    // }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_bagian' => 'required|unique:bagian,kode_bagian',
            'nama_bagian' => 'required|min:1|max:100',
        ]);

        Bagian::create($request->all());
        return redirect('/bagian');
    }

    public function edit($id)
    {
        $bagian = Bagian::find($id);
        return view('dashboard.admin.bagian.edit', ['bagian' => $bagian]);
    }

    public function update(Request $request, $id){
        $bagian = Bagian::find($id);
        $bagian->update($request->all());
        return redirect('/bagian');
    }

    public function delete ($id){
        $bagian = Bagian::find($id);
        $bagian->delete($bagian);
        return redirect('/bagian');
    }

}
