<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebTentangController extends Controller
{
    public function  index(){
        $title = 'Tentang Kami';
        return view('web.tentang', compact('title'));
    }
}