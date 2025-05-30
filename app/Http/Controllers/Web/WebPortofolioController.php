<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio;

class WebPortofolioController extends Controller
{
    public function  index(){
        $title = 'Portfolio';
        $portofolios = Portofolio::with('photos')->get();
        return view('web.portfolio', compact('title', 'portofolios'));
    }
}