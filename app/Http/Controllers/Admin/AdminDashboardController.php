<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Portofolio;
use App\Models\Paket;
use App\Models\Reservasi;
use App\Models\Testimoni;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $jumlah_user = User::count();
        $jumlah_artikel = Artikel::count();
        $jumlah_portofolio = Portofolio::count();
        $jumlah_paket = Paket::count();
        $jumlah_reservasi = Reservasi::count();
        $jumlah_testimoni = Testimoni::count();
        $transaksi = Reservasi::with(['user', 'paket'])
            ->where('status_pembayaran', 'diterima')
            ->orderBy('tanggal_reservasi', 'desc')
            ->paginate(15);

        $totalTransaksi = $transaksi->total();
        $totalPendapatan = Reservasi::where('status_pembayaran', 'diterima')->sum('total_harga');

        $reservasi_terbaru = Reservasi::with(['user', 'paket'])
            ->latest()->take(5)->get();

        $pembayaran = Reservasi::selectRaw('status_pembayaran, COUNT(*) as total')
            ->groupBy('status_pembayaran')->pluck('total', 'status_pembayaran');

        $rata_rating = round(Testimoni::avg('rating'), 1);

        $user_roles = User::selectRaw('role, COUNT(*) as total')
            ->groupBy('role')->pluck('total', 'role');

        return view('admin.dashboard', compact(
            'title',
            'jumlah_user',
            'jumlah_artikel',
            'jumlah_portofolio',
            'jumlah_paket',
            'jumlah_reservasi',
            'jumlah_testimoni',
            'reservasi_terbaru',
            'pembayaran',
            'rata_rating',
            'totalTransaksi',
            'totalPendapatan',
            'user_roles'
        ));
        return view('admin.dashboard', compact('title'));
    }
}