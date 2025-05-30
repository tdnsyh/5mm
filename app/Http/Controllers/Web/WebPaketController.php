<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;

class WebPaketController extends Controller
{
    public function  index(){
        $title = 'Paket';
        $pakets = Paket::with('fotos')->get();
        return view('web.paket', compact('title','pakets'));
    }

    public function  show($id){
        $title = 'Detail Paket';
        $paket = Paket::with('fotos')->findOrFail($id);
        return view('web.paket-detail', compact('title','paket'));
    }
}