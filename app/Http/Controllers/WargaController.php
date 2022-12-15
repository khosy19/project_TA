<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Throwable;

//use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index()
    {
        //eloquent
    //    $warga = Warga::all();
    //     return view('warga', ['datawarga'=>$warga]);

        $datawarga = DB::table('wargas')->orderBy('id')->paginate(4);
        return view('warga.warga', compact('datawarga'));

        //insert data
    // Warga::create([
    //     'nik'=>327237817,
    //     'nama'=>'badung',
    //     'jk'=>'Laki-Laki',
    //     'alamat'=>'Jl. Diponegoro',
    //     'foto_ktp'=>'fasjfnasjk',
    //     'foto_kk'=>'nasjkfnjkdas'
    // ]);
    //update data
    // Warga::find(3)->update([
    //     'nama'=>'Dini'
    // ]);

    //delete
    //Warga::find(5)->delete();
    //querybuikler    
    // $warga = DB::table('wargas')->get();
    // $warga = warga::all();
    //     dd($warga);
    }
    public function add()
    {
        return view('warga.warga-add');
    }
    public function save(Request $data)
    {
        $nik = $data->nik;
        $nama = $data->nama;
        $jk = $data->jk;
        $alamat = $data->alamat;
        $foto_ktp = $data->foto_ktp;
        $foto_kk = $data->foto_kk;

        try {
            $warga = new Warga();
            $warga->nik = $nik;
            $warga->nama = $nama;
            $warga->jk = $jk;
            $warga->alamat = $alamat;
            $warga->foto_ktp = $foto_ktp;
            $warga->foto_kk = $foto_kk;
            $warga->save();
            
            $data->session()->flash('msg',"Data sudah disimpan");
            return redirect('/warga/warga-add');
            //echo 'data berhasil disimpan';
        } catch (Throwable $e) {
            echo $e;
        }
        
    }
    public function edit($nik)
    {
        $datawarga = Warga::find($nik);
        //$datawarga = new data;
        $data = [
            'nik' => $nik,
            'nama' => $datawarga->nama,
            'jk' => $datawarga->jk,
            'alamat' => $datawarga->alamat,
            'foto_ktp'=> $datawarga->foto_ktp,
            'foto_kk' => $datawarga->foto_kk
        ];
        return view('warga.warga-edit', $data);
    }
    public function update(Request $data)
    {
        $nik = $data->nik;
        $nama = $data->nama;
        $jk = $data->jk;
        $alamat = $data->alamat;
        $foto_ktp = $data->foto_ktp;
        $foto_kk = $data->foto_kk;

        try {
            $warga = Warga::find($nik);
            $warga->nama = $nama;
            $warga->jk = $jk;
            $warga->alamat = $alamat;
            $warga->foto_ktp = $foto_ktp;
            $warga->foto_kk = $foto_kk;
            $warga->save();
            
            $data->session()->flash('msg',"Data sudah diupdate");
            return redirect('/warga/warga');
            //echo 'data berhasil disimpan';
        } catch (Throwable $e) {
            echo $e;
        }
    }
    public function hapus($nik)
    {
        Warga::find($nik)->delete();
        return redirect()->back();
    }
}
