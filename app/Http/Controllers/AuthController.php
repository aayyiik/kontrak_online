<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }

    public function postlogin(Request $request){

        $this->validate($request, [
            'nik'=>'required',
            'password'=>'required',
        ]);

        $user = $request->only('nik','password');
        if(Auth::attempt($user)){

            $user = Auth::user();

            if($user->id_role == 'R008' ){
                return redirect('/Dashboard_admin');
            }elseif($user->id_role == 'R002'){
                return redirect ('/Dashboard_rekanan');
            }elseif($user->id_role == 'R003'){
                return redirect('/Dashboard_hukum');
            }elseif($user->id_role == 'R004'){
                return redirect('/Dashboard_avp');
            }elseif($user->id_role == 'R005'){
                return redirect('/Dashboard_vp');
            }elseif($user->id_role == 'R006'){
                return redirect('Dashboard_svp');
            }elseif($user->id_role == 'R007'){
                return redirect('Dashboard_dku');
            }elseif($user->id_role == 'R001'){
                return redirect('Dashboard_buyer');
            }

            return redirect()->intended('/');
        }

        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    
        }
}
