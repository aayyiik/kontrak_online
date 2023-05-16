<?php

namespace App\Http\Controllers;

use App\Models\Status_Approve;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        $status = Status_Approve::all();
        return view('dashboard.admin.status', ['status'=>$status]);
    }
}
