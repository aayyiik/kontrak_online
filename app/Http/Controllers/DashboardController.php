<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        return view('templates.master');
    }

    public function dashboard_admin(){
        return view('dashboard.admin.admin');
    }

    public function dashboard_buyer(){
        return view('dashboard.buyer.buyer');
    }

    public function dashboard_rekanan(){
        return view('dashboard.rekanan.rekanan');
    }

    public function dashboard_avp(){
        return view('dashboard.avp.avp');
    }

    public function dashboard_vp(){
        return view('dashboard.vp.vp');
    }

    public function dashboard_svp(){
        return view('dashboard.svp.svp');
    }

    public function dashboard_dku(){
        return view('dashboard.dku.dku');
    }

    public function dashboard_hukum(){
        return view('dashboard.hukum.hukum');
    }

}
