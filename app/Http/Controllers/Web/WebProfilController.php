<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class WebProfilController extends Controller
{
    public function  profil(){
        $title = 'Profil';
        $user = Auth::user();
        $userData = $user->userData;
        return view('web.profil', compact('title','user','userData'));
    }

    public function  keranjang(){
        $title = 'Keranjang saya';
        return view('web.keranjang', compact('title'));
    }

    public function  pesananSaya(){
        $title = 'Pesanan Saya';
        return view('web.pesanan', compact('title'));
    }
}