<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Antrian;
use App\Models\Karyawan;
use App\Models\Kategori;
use App\Models\Order;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class MejaController extends Controller
{
    
    public function formPesanPilihMeja(Request $request){
        $pesanan = Pemesanan::join('orders', 'pemesanans.id_pemesanan', '=', 'orders.id_pemesanan')
        ->join('menus', 'orders.id_menu', '=', 'menus.id_menu')
        ->join('kategoris', 'orders.id_kategori', '=', 'kategoris.id_kategori')
        ->get();
        // return die($data);
        // dd($pesanan);
        // $karyawan = Karyawan::all();
        // $antrian = Antrian::all();
        $pemesanan = Pemesanan::all();
        $menu = Menu::all();
        $kategori = Kategori::all();

        // $makanan = Pemesanan::create([
        //     ''
        // ]);
        return view('pemesanan.formPesanPilihMeja',[
            'order' => $pesanan,
            'menu' => $menu,
            'kategori' => $kategori,
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
