<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Portofolio;
use App\Models\Paket;
use App\Models\Testimoni;

class WebIndexController extends Controller
{
    public function  index(){
        $title = 'Home';
        $testimoni = Testimoni::with(['user', 'reservasi'])->latest()->get();
            if ($testimoni->isEmpty()) {
                $testimoni = collect([
                    (object)[
                        'pesan' => '5mm.project berhasil menangkap momen pernikahan kami dengan sangat indah. Hasilnya luar biasa!',
                        'user' => (object)['name' => 'Anisa Putri', 'avatar' => 'https://randomuser.me/api/portraits/women/44.jpg'],
                        'reservasi' => (object)['kategori' => 'Klien Pernikahan']
                    ],
                    (object)[
                        'pesan' => 'Video promosi bisnis kami jadi terlihat profesional banget! Terima kasih tim 5mm.project.',
                        'user' => (object)['name' => 'Reza Maulana', 'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg'],
                        'reservasi' => (object)['kategori' => 'Pemilik Usaha']
                    ],
                    (object)[
                        'pesan' => 'Setiap konten dokumentasi acara kami selalu memuaskan. Selalu profesional dan tepat waktu.',
                        'user' => (object)['name' => 'Bayu Nugroho', 'avatar' => 'https://randomuser.me/api/portraits/men/64.jpg'],
                        'reservasi' => (object)['kategori' => 'Event Organizer']
                    ]
                ]);
            }
        $portofolios = Portofolio::with('photos')->latest()->take(15)->get();
        $artikelTerbaru =Artikel::latest()->take(4)->get();
        $artikels =Artikel::all();
        $pakets = Paket::with('fotos')->latest()->take(4)->get();
        return view('web.home', compact('title', 'artikelTerbaru','portofolios','artikels','pakets','testimoni'));
    }
}