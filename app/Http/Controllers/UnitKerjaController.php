<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index(){
        $unit = UnitKerja::all();
        return view('dashboard.admin.unit',['unit'=>$unit]);
    }
}
