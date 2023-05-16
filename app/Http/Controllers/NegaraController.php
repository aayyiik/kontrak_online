<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    public function index(){
        $negara = Negara::all();
        return view('dashboard.admin.negara', ['negara'=>$negara]);
    }
}
