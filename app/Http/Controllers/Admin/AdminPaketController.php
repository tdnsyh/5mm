<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\PaketFoto;
use Illuminate\Support\Facades\Storage;


class AdminPaketController extends Controller
{
    public function index()
    {
        $title = 'Paket';
        $pakets = Paket::with('fotos')->latest()->get();
        return view('admin.paket', compact('title','pakets'));
    }

    public function create()
    {
        $title = 'Tambahkan Paket';
        return view('admin.paket-create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'kategori' => 'required',
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'fotos.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $paket = Paket::create($request->only('type', 'kategori', 'nama', 'deskripsi', 'harga'));

        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $foto) {
                $path = $foto->store('paket_fotos', 'public');
                PaketFoto::create(['paket_id' => $paket->id, 'path' => $path]);
            }
        }

        return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan');
    }

    public function show(Paket $paket)
    {
        $title = 'Detail Paket';
        return view('admin.paket-detail', compact('paket','title'));
    }

    public function edit(Paket $paket)
    {
        $title = 'Edit Paket';
        return view('admin.paket-create', compact('paket', 'title'));
    }

    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'type' => 'required',
            'kategori' => 'required',
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'harga' => 'required|numeric',
            'fotos.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $paket->update($request->only('type', 'kategori', 'nama', 'deskripsi', 'harga'));

        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $foto) {
                $path = $foto->store('paket_fotos', 'public');
                PaketFoto::create(['paket_id' => $paket->id, 'path' => $path]);
            }
        }

        return redirect()->route('paket.index')->with('success', 'Paket berhasil diperbarui');
    }

    public function destroy(Paket $paket)
    {
        foreach ($paket->fotos as $foto) {
            Storage::disk('public')->delete($foto->path);
            $foto->delete();
        }
        $paket->delete();
        return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus');
    }
}