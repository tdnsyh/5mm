<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebPesananController extends Controller
{
    public function  index(){
        $title = 'Pesanan saya';
        return view('web.pesanan', compact('title'));
    }
}