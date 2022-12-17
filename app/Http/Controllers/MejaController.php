<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Antrian;
use App\Models\Karyawan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    //user meja yang guna memesan menu ke form menu
    public function halamanPemesanan(){
    $data = Pemesanan::join('menus', 'menus.id_menu', '=', 'pemesanans.id_menu')->where('status_pemesanan', 1)->get();
    // return die($data);
    $meja = Meja::all();
    $menu = Menu::all();
    return view('pemesanan.halamanPemesanan',[
        'pemesanan' => $data,
        'meja' => $meja,
        'menu' => $menu,
    ]);
    }
    public function halamanPemesananSudahBayar(){
    $data = Pemesanan::join('menus', 'menus.id_menu', '=', 'pemesanans.id_menu')->where('status_pemesanan', 2)->get();
    // $data = $data->makeHidden(['status_pemesanan'=>1]);
    // return die($data);
    $meja = Meja::all();
    $menu = Menu::all();
    return view('pemesanan.halamanPemesananSudahBayar',[
        'pemesanan' => $data,
        'meja' => $meja,
        'menu' => $menu,
    ]);
    }
    public function formPilihMeja(){
        $data = Pemesanan::join('mejas', 'mejas.no_meja', '=', 'pemesanans.no_meja')->get();
        // return die($data);
        $meja = Meja::all();
        // $menu = Menu::all();
        return view('pemesanan.formPilihMeja',[
            'pemesanan' => $data,
            'pilihMeja' => $meja,
            // 'menu' => $menu,
        ]);
        }
    public function formPesanPilihMeja($id,Request $request){
        $pesanan = Pemesanan::join('orders', 'pemesanans.id_pemesanan', '=', 'orders.id_pemesanan')
        ->join('menus', 'orders.id_menu', '=', 'menus.id_menu')
        ->get();
        // return die($data);
        // dd($pesanan);
        // $karyawan = Karyawan::all();
        // $antrian = Antrian::all();
        $pemesanan = Pemesanan::all();
        $menu = Menu::all();
        return view('pemesanan.formPesanPilihMeja',[
            'order' => $pesanan,
            'menu' => $menu,
            // 'karyawan' => $karyawan,
            // 'antrian' => $antrian,
            'pemesanan' => $pemesanan,
        ]);

        // $data->validate([
        //     'id_pemesanan' => 'required',
        //     'nama_menu' => 'required',
        //     'jumlah' => 'required',
        //     'sub_total' => 'required',
        //     'total' => 'required',
        // ]);
        // $meja = Meja::find($id);
        // $meja -> ket_meja = $meja -> ket_meja;
        // $meja -> save();
        // $data->session()->flash('msg',"Data sudah diupdate");
        //     return redirect('/admin/meja-home');
    }    
        
    
}
