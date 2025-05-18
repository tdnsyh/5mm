<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebArtikelController extends Controller
{
    public function  index(){
        $title = 'Artikel';
        return view('web.artikel', compact('title'));
    }
}