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
    //user meja yang guna memesan menu ke form menu
    public function halamanPemesanan(){
        $data = Pemesanan::join('menus', 'menus.id_menu', '=', 'pemesanans.id_menu')
        ->join('orders', 'orders.id_pemesanan', '=', 'pemesanans.id_pemesanan')
        ->where('status_pemesanan', 1)->get();
        // ->where('status_pemesanan', 1)->get();
        // return die($data);
        $meja = Meja::all();
        $menu = Menu::all();
        $order = Order::all();
        return view('pemesanan.halamanPemesanan',[
            'pemesanan' => $data,
            'meja' => $meja,
            'menu' => $menu,
            'order' => $order,
        ]);
        }
        public function pemesananEdit($id){
            $pemesanan = Pemesanan::join('menus', 'menus.id_menu', '=', 'pemesanans.id_menu')
            ->join('orders', 'orders.id_pemesanan', '=', 'pemesanans.id_pemesanan')
            ->join('mejas', 'mejas.no_meja', '=', 'pemesanans.no_meja')
            ->find($id);
            // ->where('status_pemesanan', 1)
            $status_pemesanan = Pemesanan::all();
            $meja = Meja::all();
            $menu = Menu::all();
            $order = Order::all();
            return view('pemesanan.halamanPemesananEdit',[
                'data' => $pemesanan,
                'status_pemesanan' => $status_pemesanan,
                'meja' => $meja,
                'menu' => $menu,
                'order' => $order,
            ]);
        }
        public function pemesananUpdate($id, Request $request){
            $request->validate([
                // 'no_meja' => 'required',
                // 'nama_menu' => 'required',
                // 'jumlah' => 'required',
                'status_pemesanan' => 'required',
            ]);
            // $pemesanan = Pemesanan::find($id);
            $pemesanan = Pemesanan::where('id_pemesanan', $id)->first();
            // $pemesanan -> no_meja = $request -> no_meja;
            // $pemesanan -> id_menu = $request -> nama_menu;
            // $pemesanan -> id_order = $request -> jumlah;
            $pemesanan -> status_pemesanan = $request -> status_pemesanan;
            $pemesanan -> save();
            $request->session()->flash('msg',"Data sudah diupdate");
                return redirect('/admin/halaman-pemesanan');
        }
        public function halamanPemesananSudahBayar(){
            $data = Pemesanan::join('menus', 'menus.id_menu', '=', 'pemesanans.id_menu')
            ->join('orders', 'orders.id_pemesanan', '=', 'pemesanans.id_pemesanan')
            ->where('status_pemesanan', 2)->get();
        // $data = Pemesanan::join('menus', 'menus.id_menu', '=', 'pemesanans.id_menu')->where('status_pemesanan', 2)->get();
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
            // public function storePemesanan(Request $request){
            //     $request->validate([
            //         'nama_pemesan'=>'required',
            //         'nama_menu'=>'required',
            //         'jumlah'=>'required',
            //     ]);
            //     Pemesanan::create([
            //         'nama_pemesan'=>$request->nama_pemesan,
            //         'nama_menu'=>$request->nama_menu,
            //         'jumlah'=>$request->jumlah,
            //         'nama_kategori'=>$request->nama_kategori,
            //     ]);
            //     $request->session()->flash('msg','Data sudah dipesan');
            //         return redirect('/admin/halaman-pemesanan/sudahbayar');
        
            
            // }


    // ===================ORDER=======================
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
        public function cetakOrder(){
            $cetakOrder = Pemesanan::join('orders', 'pemesanans.id_pemesanan', '=', 'orders.id_pemesanan')
            ->join('menus', 'orders.id_menu', '=', 'menus.id_menu')
            ->get();
            // return die($data);
            // dd($data);
            $karyawan = Karyawan::all();
            $antrian = Antrian::all();
            $pemesanan = Pemesanan::all();
            $menu = Menu::all();

            // $potongan = $cetak->jaminan_ht + $cetak->jaminan_p + $cetak->biaya_jabatan;

            // dibawah ini untuk cek view manual html
            // return view ('hrd.karyawan.print', [
            //     'cetak'   => $cetak,
            //     'potongan'=> $potongan
            // ]);

            return view('pemesanan.laporanPenjualan',[
                'cetakOrder' => $cetakOrder,
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
    public function storePemesanan(Request $request){
        $request->validate([
            'nama_pemesan'=>'required',
            'nama_menu'=>'required',
            'jumlah'=>'required',
        ]);
        Pemesanan::create([
            'nama_pemesan'=>$request->nama_pemesan,
            'nama_menu'=>$request->nama_menu,
            'jumlah'=>$request->jumlah,
            'nama_kategori'=>$request->nama_kategori,
        ]);
        $request->session()->flash('msg','Data sudah dipesan');
            return redirect('/admin/halaman-pemesanan/sudahbayar');

    
    }
    public function validasi(Request $request){
        dd($request->all());
    }    
}
