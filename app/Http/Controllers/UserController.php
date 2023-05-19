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

    public function edit($id){
        $user = User::find($id);
        return view('dashboard.admin.user.edit', ['user'=>$user]);
    }
}
