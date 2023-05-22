<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\UnitKerja;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        $role = Role::all();
        $unit = UnitKerja::all();
        return view('dashboard.admin.user.index', ['user'=>$user], compact('role','unit'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|unique:bagian,nik',
            'nama' => 'required|min:1|max:100',
            'kode_role' => 'required',
            'kode_unit' => 'required',
            'status' => 'required'
        ]);

        User::create($request->all());
        return redirect('/user');
    }

    public function edit($id){
        $user = User::find($id);
        return view('dashboard.admin.user.edit', ['user'=>$user]);
    }

    public function delete ($id){
        $user = User::find($id);
        $user->delete($user);
        return redirect('/user');
    }
}
