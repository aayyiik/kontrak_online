<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function index(){
        $bagian = Bagian::all();
        return view('dashboard.admin.bagian', ['bagian'=> $bagian]);
    }

}
