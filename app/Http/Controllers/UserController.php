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
        return view('dashboard.admin.user', ['user'=>$user], compact('role','unit'));
    }
}