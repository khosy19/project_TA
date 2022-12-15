<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function tampilLogin(){
        return view('auth.login');
    }
    function Login(Request $request){
        Session::flash('username', $request->username);
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ],[
            'username.required'=>'username wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);
        $infoLogin =[
            'username'=>$request->username,
            'password'=>$request->password,
        ];
        if(Auth::attempt($infoLogin)){
            //success
            return redirect('admin/karyawan-home');
        }else{
            //fail
            // return 'gagal';
            return redirect('tampilLogin')->withErrors('Username/pass tidak benar');
        }
    }
}
