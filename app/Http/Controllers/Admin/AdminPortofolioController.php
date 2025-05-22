<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Models\PortofolioFoto;
use Illuminate\Support\Facades\Storage;

class AdminPortofolioController extends Controller
{
    public function index()
    {
        $title = 'Portofolio';
        $portofolios = Portofolio::with('photos')->latest()->get();
        return view('admin.portofolio', compact('title', 'portofolios'));
    }

    public function create()
    {
        $title = 'Tambah Portofolio';
        return view('admin.portofolio-create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $portofolio = Portofolio::create($request->only('judul', 'deskripsi'));

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('portofolio', 'public');
                PortofolioFoto::create([
                    'portofolio_id' => $portofolio->id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil disimpan.');
    }

    public function show(Portofolio $portofolio)
    {
        $portofolio->load('photos');
        $title = 'Detail Portofolio';
        return view('admin.portofolio-detail', compact('portofolio','title'));
    }

    public function edit(Portofolio $portofolio)
    {
        return view('portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $portofolio->update($request->only('judul', 'deskripsi'));

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('portofolio', 'public');
                PortofolioFoto::create([
                    'portofolio_id' => $portofolio->id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diupdate.');
    }

    public function destroy(Portofolio $portofolio)
    {
    foreach ($portofolio->photos as $photo) {
        Storage::disk('public')->delete($photo->path);
        $photo->delete();
    }

    $portofolio->delete();

    return redirect()->route('portofolio.index')->with('success', 'Portofolio dan semua foto dihapus.');
    }
}