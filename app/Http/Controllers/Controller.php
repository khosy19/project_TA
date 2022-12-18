<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class Controller extends BaseController
{
    public function qrcode(){
        return view('qrcode');
    }
}
