<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Portofolio;
use App\Models\PaketFoto;

class WebIndexController extends Controller
{
    public function  index(){
        $title = 'Home';
        $portofolios = Portofolio::with('photos')->latest()->take(15)->get();
        $artikelTerbaru =Artikel::latest()->take(4)->get();
        $artikels =Artikel::all();
        return view('web.home', compact('title', 'artikelTerbaru','portofolios','artikels'));
    }
}