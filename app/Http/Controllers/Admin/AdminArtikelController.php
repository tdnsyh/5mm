<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class AdminArtikelController extends Controller
{
    public function index()
    {
        $title = 'Artikel';
        $artikel = Artikel::all();
        return view('admin.artikel', compact('title','artikel'));
    }

    public function create()
    {
        $title='Tambah Artikel';
        return view('admin.artikel-create',compact('title'));
    }

    public function show($id)
    {
        $title='Detail Artikel';
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel-detail', compact('artikel','title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required',
            'penulis' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->isi_berita = $request->isi_berita;
        $artikel->penulis = $request->penulis;
        $artikel->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $artikel->gambar = $imageName;
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Berita berhasil dibuat!');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel-edit', compact('artikel'))->with('title', 'Edit Artikel');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required',
            'penulis' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->isi_berita = $request->isi_berita;
        $artikel->penulis = $request->penulis;
        $artikel->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            if ($artikel->gambar && file_exists(public_path('images/' . $artikel->gambar))) {
                unlink(public_path('images/' . $artikel->gambar));
            }

            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $artikel->gambar = $imageName;
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->gambar && file_exists(public_path('images/' . $artikel->gambar))) {
            unlink(public_path('images/' . $artikel->gambar));
        }

        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Berita berhasil dihapus!');
    }
}