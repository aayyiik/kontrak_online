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

            if($user->role == 'R001' ){
                return redirect('/Dashboard_Buyer');
            }elseif($user->role == 'R002'){
                return redirect ('/Dashboard_Rekanan');
            }elseif($user->role == 'R003'){
                return redirect('/Dashboard_Dep.Hukum');
            }

            return redirect()->intended('/');
        }

        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    
        }
}
