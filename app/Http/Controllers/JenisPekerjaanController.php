<?php

namespace App\Http\Controllers;

use App\Models\JenisPekerjaan;
use Illuminate\Http\Request;

class JenisPekerjaanController extends Controller
{
    public function index(){
        $jepe = JenisPekerjaan::all();
        return view('dashboard.admin.jenispekerjaan', ['jepe'=> $jepe]);
    }
}
