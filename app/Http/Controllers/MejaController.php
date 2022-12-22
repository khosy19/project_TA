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
    
    public function pesanPelanggan(Request $request){
        $pesanan = Pemesanan::join('orders', 'pemesanans.id_pemesanan', '=', 'orders.id_pemesanan')
        ->join('menus', 'orders.id_menu', '=', 'menus.id_menu')
        ->join('kategoris', 'orders.id_kategori', '=', 'kategoris.id_kategori')
        ->get();
        // return die($data);
        // dd($pesanan);
        // $antrian = Antrian::all();
        $pemesanan = Pemesanan::all();
        $menu = Menu::all();
        $kategori = Kategori::all();
        $jumlah = Order::all();
        // $harga = Order::all();
        // $subtotal = $jumlah * $harga;
        // $total = $subtotal->count();

        // $makanan = Pemesanan::create([
        //     ''
        // ]);
        
        return view('pelanggan.pesanPelanggan',[
            'order' => $pesanan,
            'menu' => $menu,
            'kategori' => $kategori,
            // 'karyawan' => $karyawan,
            // 'antrian' => $antrian,
            'pemesanan' => $pemesanan,

        ]);
        Pemesanan::create([
            'id_menu'=>$request->nama_menu,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
            'nama_pemesan'=>$request->nama_pemesan,
            'sub_total'=>$request->sub_total,
            'total'=>$request->total,
        ]);
        $request->session()->flash('msg','Data sudah disimpan');
            return redirect('pemesanan-checkout');
            

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
        
    // public function storePelanggan(Request $request){
    //     $request->validate([
    //         'nama_menu'=>'required',
    //         'harga'=>'required',
    //         'jumlah'=>'required',
    //         'nama_pemesan'=>'required',
    //     ]);
    //     Pemesanan::create([
    //         'id_menu'=>$request->nama_menu,
    //         'harga'=>$request->harga,
    //         'jumlah'=>$request->jumlah,
    //         'nama_pemesan'=>$request->nama_pemesan,
    //         'sub_total'=>$request->sub_total,
    //         'total'=>$request->total,
    //     ]);
    //     $request->session()->flash('msg','Data sudah disimpan');
    //         return redirect('pemesanan-checkout');
    // }
    public function halamanCheckout(Request $request){
        $request->validate([
            'nama_menu'=>'required',
            'harga'=>'required',
            'jumlah'=>'required',
            // 'subtotal'=>'required',
            'total'=>'required',
            'nama_pemesan'=>'required',
        ]);
        
        // massassignment
        // $karyawan = Karyawan::create($request->all());
        // $pesanan = Pemesanan::join('orders', 'pemesanans.id_pemesanan', '=', 'orders.id_pemesanan')
        // ->join('menus', 'orders.id_menu', '=', 'menus.id_menu')
        // ->join('kategoris', 'orders.id_kategori', '=', 'kategoris.id_kategori')
        // ->get();
        // $pemesanan = Pemesanan::all();
        // $menu = Menu::all();
        // $kategori = Kategori::all();

        // return view('pelanggan.halamanCheckout',[
        //     'data' => $pesanan,
        //     'menu' => $menu,
        //     'kategori' => $kategori,
        //     'karyawan' => $karyawan,
        //     'antrian' => $antrian,
        //     'pemesanan' => $pemesanan,
        // ]);
    }
    public function total(Request $request){
        $this->validate($request,[
            'id_menu'  =>  'required',
            'jumlah'   =>  'required',
            'harga'    =>  'required',
        ]);
        
        $id_order = $request->id_order;
        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $subtotal = $harga * $jumlah;
        $total = $subtotal;

        $data = Order::join('menus', 'menus.id_menu', '=', 'orders', 'orders.id_menu')
        ->where('id_order', $id_order)
        ->get();
    }
}
