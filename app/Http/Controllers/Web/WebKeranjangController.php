<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebKeranjangController extends Controller
{
    public function  index(){
        $title = 'Keranjang saya';
        return view('web.keranjang', compact('title'));
    }
}