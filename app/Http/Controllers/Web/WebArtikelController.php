<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Str;

class WebArtikelController extends Controller
{
    public function index()
    {
        $title = 'Artikel';
        $berita = Artikel::paginate(10);
        return view('web.artikel', compact('title', 'berita'));
    }

    public function detail($kategori, $id, $judul)
    {
        $berita = Artikel::findOrFail($id);

        if (Str::slug($berita->kategori) != $kategori) {
            abort(404);
        }

        $beritaLainnya = Artikel::where('id', '!=', $id)
                            ->take(3)
                            ->get();

        $title = $berita->judul;
        return view('web.artikel-detail', compact('berita', 'title', 'beritaLainnya'));
    }
}