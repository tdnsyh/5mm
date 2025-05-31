<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;

class AdminPesananController extends Controller
{
    public function index()
    {
        $title = 'Pesanan';
        $reservasiMenunggu = Reservasi::with(['user', 'paket'])
            ->where('status', 'menunggu')
            ->latest()->get();

        $semuaReservasi = Reservasi::with(['user', 'paket'])
            ->latest()->get();

        return view('admin.pesanan', compact('title', 'reservasiMenunggu', 'semuaReservasi'));
    }

    public function konfirmasi(Request $request, $id)
    {
    $reservasi = Reservasi::findOrFail($id);
    $status = $request->input('aksi');

    if (in_array($status, ['diterima', 'ditolak'])) {
        $reservasi->update(['status' => $status]);
        return back()->with('success', 'Reservasi berhasil diperbarui.');
    }

    return back()->with('error', 'Status tidak valid.');
    }

    public function show($id)
    {
        $title='Detail';
        $reservasi = Reservasi::with('paket', 'user')->findOrFail($id);
        return view('admin.pesanan-detail', compact('reservasi','title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:menunggu,diterima,ditolak,selesai',
            'status_pembayaran' => 'required|in:belum,dibayar,diterima',
        ]);

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update(['status' => $request->status]);
        $reservasi->update(['status_pembayaran' => $request->status_pembayaran]);

        return redirect()->route('admin.pesanan', $reservasi->id)->with('success', 'Status berhasil diperbarui.');
    }

}