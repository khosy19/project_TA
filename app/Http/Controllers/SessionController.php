<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function login(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect(Auth::user()->level.'/karyawan-home');
        }
        return redirect('/')->withErrors(['Username atau Sandi Salah']);
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    function tampilLogin(){
        return view('auth.login');
    }
    // function Login(Request $request){
    //     Session::flash('username', $request->username);
    //     $request->validate([
    //         'username'=>'required',
    //         'password'=>'required',
    //     ],[
    //         'username.required'=>'username wajib diisi',
    //         'password.required'=>'password wajib diisi',
    //     ]);
    //     $infoLogin =[
    //         'username'=>$request->username,
    //         'password'=>$request->password,
    //     ];
    //     if(Auth::attempt($infoLogin)){
    //         //success
    //         return redirect('admin/karyawan-home');
    //     }else{
    //         //fail
    //         // return 'gagal';
    //         return redirect('tampilLogin')->withErrors('Username/pass tidak benar');
    //     }
    // }
    // ======================REGISTER USER==============================
    function showUser(){
        $user = User::join('karyawans', 'karyawans.id_karyawan', '=', 'users.id_karyawan')->get();
        return view('user.user-home',[
            'user' => $user
        ]);
    }
    function addUser(){
        $user = User::all();
        $karyawan = Karyawan::all();
        return view('user.user-add',[
            'level' => $user,
            'nama_karyawan' => $karyawan,
        ]);
        
    }
    function storeUser(Request $request){
        $request->validate([
            'nama_karyawan'=>'required',
            'email'=>'required',
            // Hash::make($request->password),
            // 'password'=>'required',
            'level'=>'required',
        ]);
        User::create([
            'id_karyawan'=>$request->nama_karyawan,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'level'=>$request->level,
        ]);
        $request->session()->flash('msg','Data sudah disimpan');
            return redirect('/admin/user-add');
    }
    public function editUser($id)
    {
        $User = User::join('karyawans', 'karyawans.id_karyawan', '=', 'users.id_karyawan')->find($id);
        $nama_karyawan = Karyawan::all();
        return view('user.user-edit',[
            'data'=>$User,
            'nama_karyawan'=>$nama_karyawan,
        ]);
        
    }
    public function updateUser($id, Request $request)
    {
        $request->validate([
            'nama_karyawan'=>'required',
            'email'=>'required',
            'password'=>'required',
            // 'password'=>bcrypt($request->password),
            'level'=>'required',
        ]);
        $User = User::find($id);
        $User -> id_karyawan = $request -> nama_karyawan;
        $User -> email = $request -> email;
        $User -> password = $request -> password;
        $User -> level = $request -> level;
        $User -> save();
        $request->session()->flash('msg',"Data sudah diupdate");
            return redirect('/admin/user-home');
        
    }
}
