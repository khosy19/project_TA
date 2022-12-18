<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Karyawan;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function halamanOrder(){
        $data = Pemesanan::join('orders', 'pemesanans.id_pemesanan', '=', 'orders.id_pemesanan')
        ->join('menus', 'orders.id_menu', '=', 'menus.id_menu')
        ->get();
        // return die($data);
        // dd($data);
        $karyawan = Karyawan::all();
        $antrian = Antrian::all();
        $pemesanan = Pemesanan::all();
        $menu = Menu::all();
        return view('order.halamanOrder',[
            'order' => $data,
            'menu' => $menu,
            'karyawan' => $karyawan,
            'antrian' => $antrian,
            'pemesnaan' => $pemesanan,
        ]);
        }
    public function pemesananAdd(){
        $pemesanan = Pemesanan::all();
        // $meja = Meja::all();
        // $order = Order::all();
        return view('pemesanan.pemesanan-add', [
        'pemesanan' => $pemesanan,
        // 'order' => $order,
        // 'meja' => $meja,
    ]);
    }    
}
