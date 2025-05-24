<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebTentangController extends Controller
{
    public function  index(){
        $title = 'Tentang 5MM Project';
        return view('web.tentang', compact('title'));
    }
}