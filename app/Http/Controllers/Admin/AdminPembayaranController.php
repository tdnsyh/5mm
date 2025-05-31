<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;

class AdminPembayaranController extends Controller
{
    public function index()
    {
        $title = 'Pembayaran diterima';
        $transaksi = Reservasi::with(['user', 'paket'])
            ->where('status_pembayaran', 'diterima')
            ->orderBy('tanggal_reservasi', 'desc')
            ->paginate(15);

        $totalTransaksi = $transaksi->total();
        $totalPendapatan = Reservasi::where('status_pembayaran', 'diterima')->sum('total_harga');

        return view('admin.pembayaran', compact('title','transaksi','totalTransaksi','totalPendapatan'));
    }
}