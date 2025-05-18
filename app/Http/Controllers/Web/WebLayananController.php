<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebLayananController extends Controller
{
    public function  index(){
        $title = 'Home';
        return view('web.layanan', compact('title'));
    }
}