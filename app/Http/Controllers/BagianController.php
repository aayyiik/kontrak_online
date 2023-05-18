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

    public function create()
    {
        return view('dashboard.admin.bagian.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_bagian' => 'required|min:1|max:100',
        ]);

        Bagian::create($request->all());
        return redirect('/bagian');
    }

    public function edit($id_bagian)
    {
        $bagian = Bagian::find($id_bagian);
        return view('dashboard.admin.bagian.edit', ['bagian' => $bagian]);
    }

    public function update(Request $request, $id_bagian){
        $bagian = Bagian::find($id_bagian);
        $bagian->update($request->all());
        return redirect('/bagian');
    }
}
