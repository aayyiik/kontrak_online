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
        $unit_kerja = UnitKerja::all();
        $role = Role::all();
        return view('dashboard.admin.user', ['user'=>$user], compact('unit_kerja', 'role'));
    }
}
