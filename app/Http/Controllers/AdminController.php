<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showKaryawan(Request $request)
    {
        // sortable
        // $showKaryawan = [
        //     'showKaryawan' => Karyawan::sortable()->paginate(10)->onEachside(2)->fragment('karyawan'),
        // ];

        //fitur cari
    // $cari = $request->query('cari');
    // if (!empty($cari)) {
    //     DB::table('karyawans')->orderBy('id_karyawan')->paginate(4)->where('karyawan.nama_karyawan','like','%'.$cari.'%');
    // }else{

    //     $showKaryawan = DB::table('karyawans')->orderBy('id_karyawan')->paginate(4);
    // }
    $data = Karyawan::join('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.id_jabatan')->get();
    // $data = Karyawan::paginate(5);
    return view('karyawan.karyawan-home',[
        'karyawan' => $data,
    ]);
    // //query builder
    // $showKaryawan = DB::table('karyawans')->orderBy('id_karyawan')->paginate(4);
    // return view('karyawan.karyawan-home', compact('showKaryawan'));

    //search
    // ->with([
    //     'showKaryawan'=>$showKaryawan,
    //     'cari'=>$cari
    // ]);
    }
    public function addKaryawan()
    {
    $jabatan = Jabatan::all();
    return view('karyawan.karyawan-add', [
        'jabatan' => $jabatan
    ]);
    }
    public function editKaryawan($id)
    {
        $karyawan = Karyawan::join('jabatans', 'jabatans.id_jabatan', '=', 'karyawans.id_jabatan')->find($id);
        $option_jabatan = Jabatan::all();
        return view('karyawan.karyawan-edit',[
            'data'=>$karyawan,
            'jabatan'=>$option_jabatan,
        ]);
        
    }
    public function updateKaryawan($id, Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'kelamin' => 'required',
            'jabatan' => 'required',
        ]);
        $karyawan = Karyawan::find($id);
        $karyawan -> nama_karyawan = $request -> nama_karyawan;
        $karyawan -> kelamin = $request -> kelamin;
        $karyawan -> id_jabatan = $request -> jabatan;
        $karyawan -> save();
        $request->session()->flash('msg',"Data sudah diupdate");
            return redirect('/admin/karyawan-home');
        
    }

    function storeKaryawan(Request $request){
        $request->validate([
            'nama_karyawan'=>'required',
            'kelamin'=>'required',
        ]);
        Karyawan::create([
            'nama_karyawan'=>$request->nama_karyawan,
            'kelamin'=>$request->kelamin,
            'id_jabatan'=>$request->jabatan,
        ]);
        // massassignment
        // $karyawan = Karyawan::create($request->all());
        $request->session()->flash('msg','Data sudah disimpan');
            return redirect('/admin/karyawan-add');
    }
    public function hapusKaryawan($id)
    {
        $hapusKaryawan=Karyawan::find($id);
        // $hapusKaryawan->session()->forget('hapus');
        $hapusKaryawan->delete();
        // $id->session()->flash('msg',"Data sudah diupdate");
        // return redirect('/admin/karyawan-home');
        return redirect()->route('showKaryawan')->with('hapus','Data disimpan');
    }
// ===================kategori==========================
    public function showKategori(Request $request)
    {
        $data = Kategori::all();
        // dd($data);
        return view('kategori.kategori-home',[
            'kategori' => $data
        ]);
    }
    public function addKategori()
    {
    $kategori = Kategori::all();
    return view('kategori.kategori-add', [
        'kategori' => $kategori,
    ]);
    }
    public function editKategori($id)
    {
        $kategori = Kategori::all()->find($id);
        return view('kategori.kategori-edit',[
            'data'=>$kategori,
        ]);
        
    }
    public function updateKategori($id, Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);
        $kategori = Kategori::find($id);
        $kategori -> nama_kategori = $request -> nama_kategori;
        $kategori -> save();
        $request->session()->flash('msg',"Data sudah diupdate");
            return redirect('/admin/kategori-home');
        
    }
    function storeKategori(Request $request){
        $request->validate([
            'nama_kategori'=>'required',
        ]);
        Kategori::create([
            'nama_kategori'=>$request->nama_kategori,
        ]);
        $request->session()->flash('msg','Data sudah disimpan');
            return redirect('/admin/kategori-add');
    }
    public function hapusKategori($id)
    {
        $hapuskategori=Kategori::find($id);
        $hapuskategori->delete();
        return redirect()->route('showKategori')->with('hapus','Data disimpan');
    }
    // ========================MENU==================================
    public function showMenu(Request $request)
    {
    $data = Menu::join('kategoris', 'kategoris.id_kategori', '=', 'menus.id_kategori')->get();
    return view('menu.menu-home',[
        'menu' => $data,
    ]);

    }
    public function addMenu()
    {
    $kategori = Kategori::all();
    return view('menu.menu-add', [
        'kategori' => $kategori
    ]);
    }
    public function editMenu($id)
    {
        $menu = Menu::join('kategoris', 'kategoris.id_kategori', '=', 'menus.id_menu')->find($id);
        $option_menu = Kategori::all();
        return view('menu.menu-edit',[
            'data'=>$menu,
            'kategori'=>$option_menu,
        ]);
        
    }
    public function updateMenu($id, Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'status_menu' => 'required',
        ]);
        $menu = Menu::find($id);
        $menu -> nama_menu = $request -> nama_menu;
        $menu -> id_kategori = $request -> kategori;
        $menu -> harga = $request -> harga;
        $menu -> status_menu = $request -> status_menu;
        $menu -> save();
        $request->session()->flash('msg',"Data sudah diupdate");
            return redirect('/admin/menu-home');
        
    }

    function storeMenu(Request $request){
        $request->validate([
            'nama_menu' => 'required',
            'nama_kategori' => 'required',
            'harga' => 'required',
            'status_menu' => 'required',
        ]);
        Menu::create([
        'nama_menu' => $request -> nama_menu,
        'id_kategori' => $request -> nama_kategori,
        'harga' => $request -> harga,
        'status_menu' => $request -> status_menu,        
        ]);
        $request->session()->flash('msg',"Data sudah ditambah");
        return redirect('/admin/menu-add');
        // massassignment
        // $karyawan = Karyawan::create($request->all());

    }
    public function hapusMenu($id)
    {
        $hapusMenu=Menu::find($id);
        $hapusMenu->delete();
        return redirect()->route('showMenu')->with('hapus','Data disimpan');
    }

    // raw query
    // public function saveKaryawan(Request $data)
    // {
    //     $nama_karyawan = $data->nama_karyawan;
    //     $kelamin = $data->kelamin;

    //     try {
    //         $karyawan = new Karyawan();
    //         $karyawan->nama_karyawan = $nama_karyawan;
    //         $karyawan->kelamin = $kelamin;
    //         $karyawan->save();
            
    //         $data->session()->flash('msg',"Data sudah disimpan");
    //         return redirect('/admin/karyawan-add');
    //     } catch (Throwable $e) {
    //         echo $e;
    //     }
        
    // }

    public function showJabatan(){
    $showJabatan = DB::table('jabatans')->orderBy('id_jabatan');
    return view('jabatan.jabatan-home', compact('showJabatan'));
    }
    public function addJabatan()
    {
    return view('jabatan.jabatan-add');
    }
    public function saveJabatan(Request $data)
    {
        $nama_jabatan = $data->nama_jabatan;
        try {
            $jabatan = new Jabatan();
            $jabatan->nama_jabatan = $nama_jabatan;
            $jabatan->save();
            
            $data->session()->flash('msg',"Data sudah disimpan");
            return redirect('/admin/jabatan-add');
            //echo 'data berhasil disimpan';
        } catch (Throwable $e) {
            echo $e;
        }
        
    }
    public function editJabatan($id_jabatan)
    {
        $dataJabatan = Jabatan::find($id_jabatan);
        //$datawarga = new data;
        $data = [
            'id_jabatan' => $dataJabatan->id_jabatan,
            'nama_jabatan' => $dataJabatan->nama_jabatan,
        ];
        return view('jabatan.jabatan-edit', $data);
    }
    public function updateJabatan(Request $data)
    {
        $id_jabatan = $data->id_jabatan;
        $nama_jabatan = $data->nama_jabatan;
        try {
            $jabatan = Jabatan::find($id_jabatan);
            $jabatan->nama_jabatan = $nama_jabatan;
            $jabatan->save();
            
            $data->session()->flash('msg',"Data sudah diupdate");
            return redirect('/admin/jabatan-home');
            //echo 'data berhasil disimpan';
        } catch (Throwable $e) {
            echo $e;
        }
    }
    public function hapusJabatan($id_jabatan)
    {
        Jabatan::find($id_jabatan)->delete();
        return redirect()->back();
    }


}
