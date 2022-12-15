<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    $dataKaryawan = DB::table('karyawans')->orderBy('id_karyawan')->paginate(4);
    return view('karyawan.karyawan-home', compact('dataKaryawan'));
    }
 
    public function add()
    {
        return view('karyawan.karyawan-add');
    }
    public function save(Request $data)
    {
        $nama_karyawan = $data->nama_karyawan;
        $kelamin = $data->kelamin;

        try {
            $karyawan = new Karyawan();
            $karyawan->nama_karyawan = $nama_karyawan;
            $karyawan->kelamin = $kelamin;
            $karyawan->save();
            
            $data->session()->flash('msg',"Data sudah disimpan");
            return redirect('/karyawan/karyawan-add');
            //echo 'data berhasil disimpan';
        } catch (Throwable $e) {
            echo $e;
        }
        
    }
    // public function edit($id_karyawan)
    // {
    //     $dataKaryawan = Karyawan::find($id_karyawan);
    //     //$datawarga = new data;
    //     $data = [
    //         'nama_karyawan' => $dataKaryawan->nama_karyawan,
    //         'kelamin' => $dataKaryawan->kelamin,
    //     ];
    //     return view('karyawan.karyawan-edit', $data);
    // }
    // public function update(Request $data)
    // {
    //     $nama_Karyawan = $data->nama_karyawan;
    //     $kelamin = $data->kelamin;
    //     try {
    //         $karyawan = Karyawan::find($id_karyawan);
    //         $karyawan->nama_karyawan = $nama_karyawan;
    //         $karyawan->kelamin = $kelamin;
    //         $karyawan->save();
            
    //         $data->session()->flash('msg',"Data sudah diupdate");
    //         return redirect('/warga/warga');
    //         //echo 'data berhasil disimpan';
    //     } catch (Throwable $e) {
    //         echo $e;
    //     }
    // }
    // public function hapus($id_karyawan)
    // {
    //     Karyawan::find($id_karyawan)->delete();
    //     return redirect()->back();
    // }
}
