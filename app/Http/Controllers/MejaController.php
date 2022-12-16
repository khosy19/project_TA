<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    //user meja yang guna memesan menu ke form menu
    public function formPemesanan(){
    $data = Pemesanan::join('menus', 'menus.id_menu', '=', 'pemesanans.id_menu')->get();
    // return die($data);
    $meja = Meja::all();
    $menu = Menu::all();
    return view('pemesanan.formPemesanan',[
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
}
