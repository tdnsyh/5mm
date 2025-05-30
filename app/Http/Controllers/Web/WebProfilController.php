<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserData;

class WebProfilController extends Controller
{
    public function  profil(){
        $title = 'Profil';
        $user = Auth::user();
        $userData = $user->userData;
        return view('web.profil', compact('title','user','userData'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        $user = Auth::user();
        $user->name = $request->name;

        UserData::updateOrCreate(
            ['user_id' => $user->id],
            [
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
            ]
        );

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
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