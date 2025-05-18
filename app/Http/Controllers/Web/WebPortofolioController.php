<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebPortofolioController extends Controller
{
    public function  index(){
        $title = 'Portfolio';
        return view('web.portfolio', compact('title'));
    }
}