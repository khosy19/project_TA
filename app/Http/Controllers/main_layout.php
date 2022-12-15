<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_layout extends Controller
{
    public function index()
    {
        return view('layouts.main');
    }
    public function home()
    {
        return view('layouts.home');
    }
}
