<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    public function showJabatan(){
        // return view('jabatan.jabatan-home');
    $dataJabatan = Jabatan::all();
    return view('jabatan.jabatan-home',[
        'showJabatan' => $dataJabatan
    ]);
    }
    public function addJabatan()
    {
    $jabatan=Jabatan::all();
    return view('jabatan.jabatan-add',[
        'jabatan'=>$jabatan,
    ]);
    }
    public function storeJabatan(Request $data)
    {
        $data->validate([
            'nama_jabatan'=>'required',
        ]);
        Jabatan::create([
            'nama_jabatan'=>$data->nama_jabatan,
        ]);
        $data->session()->flash('msg','Data sudah disimpan');
            return redirect('/admin/jabatan-add');
        // $nama_jabatan = $data->nama_jabatan;
        // try {
        //     $jabatan = new Jabatan();
        //     $jabatan->nama_jabatan = $nama_jabatan;
        //     $jabatan->save();
            
        //     $data->session()->flash('msg',"Data sudah disimpan");
        //     return redirect('/admin/jabatan-add');
        //     //echo 'data berhasil disimpan';
        // } catch (Throwable $e) {
        //     echo $e;
        // }
        
    }
    public function editJabatan($id_jabatan)
    {
        $jabatan = Jabatan::all()->find($id_jabatan);
        return view('jabatan.jabatan-edit',[
            'jabatan'=>$jabatan,
        ]);
        // $dataJabatan = Jabatan::find($id_jabatan);
        // //$datawarga = new data;
        // $data = [
        //     'id_jabatan' => $dataJabatan->id_jabatan,
        //     'nama_jabatan' => $dataJabatan->nama_jabatan,
        // ];
        // return view('jabatan.jabatan-edit', $data);
    }
    public function updateJabatan($id, Request $request)
    {
        // $id_jabatan = $data->id_jabatan;
        // $nama_jabatan = $data->nama_jabatan;
        // try {
        //     $jabatan = Jabatan::find($id_jabatan);
        //     $jabatan->nama_jabatan = $nama_jabatan;
        //     $jabatan->save();
            
        //     $data->session()->flash('msg',"Data sudah diupdate");
        //     return redirect('/admin/jabatan-home');
        //     //echo 'data berhasil disimpan';
        // } catch (Throwable $e) {
        //     echo $e;
        // }
        $request->validate([
            'nama_jabatan' => 'required',
        ]);
        $jabatan = Jabatan::find($id);
        $jabatan -> nama_jabatan = $request -> nama_jabatan;
        $jabatan -> save();
        $request->session()->flash('msg',"Data sudah diupdate");
            return redirect('/admin/jabatan-home');
    }
    public function hapusJabatan($id)
    {
        // Jabatan::find($id_jabatan)->delete();
        // return redirect()->back();
        $hapusjabatan=Jabatan::find($id);
        $hapusjabatan->delete();
        return redirect()->route('showJabatan')->with('hapus','Data disimpan');
    }
}

