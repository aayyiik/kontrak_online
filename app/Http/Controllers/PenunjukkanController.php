<?php

namespace App\Http\Controllers;

use App\Models\Penunjukkan;
use Faker\Core\File;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class PenunjukkanController extends Controller
{
    public function create(){
        return view('dashboard.rekanan.penunjukkan.create');
    }

    public function store_penunjukkan(Request $request){
        $request->validate([
            'no_kontrak' => 'required',
            'tgl_kontrak' => 'required',
            'sik' => 'required',
            'nib' => 'required'
        ]);

        $sikModel = new Penunjukkan();
        if($request->file()){
            $sikName = time().'_'.$request->file->getClientOriginalName();
            $sikPath = $request->file('sik')->storeAs('uploads', $sikName, 'public');
            $sikModel->sik = '/storage/'.$sikPath;
            // $nibName = time().'_'.$request->file->getClientOriginalName();
            // $nibPath = $request->file('nib')->storeAs('uploads', $nibName, 'public');
            // $nibModel->nib = '/storage/'.$nibPath;
            $sikModel->save();
            // $nibModel->save();

            return back();
        }
    }
}
