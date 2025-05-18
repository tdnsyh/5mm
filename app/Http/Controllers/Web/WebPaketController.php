<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebPaketController extends Controller
{
    public function  index(){
        $title = 'Paket';
        return view('web.paket', compact('title'));
    }

    public function  detailPaket(){
        $title = 'Detail Paket';
        return view('web.paket-detail', compact('title'));
    }
}