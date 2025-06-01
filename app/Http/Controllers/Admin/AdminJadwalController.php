<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;

class AdminJadwalController extends Controller
{
    public function index()
    {
        $title = 'Jadwal';

        $reservasiDates = Reservasi::select('tanggal_reservasi', 'status')
            ->get()
            ->groupBy('tanggal_reservasi')
            ->map(function ($items) {
                $prioritas = ['selesai', 'diterima', 'menunggu', 'ditolak'];

                foreach ($prioritas as $status) {
                    if ($items->contains('status', $status)) {
                        return $status;
                    }
                }
                return $items->first()->status;
            });

        return view('admin.jadwal', [
            'title' => $title,
            'reservasiDates' => $reservasiDates,
        ]);
    }

    public function getData(Request $request)
    {
        $date = $request->query('date');
        $reservasis = Reservasi::with('user', 'paket')
                    ->whereDate('tanggal_reservasi', $date)
                    ->get();

        return response()->json($reservasis->map(function($item){
            return [
                'kode_reservasi' => $item->kode_reservasi,
                'user_name' => $item->user->name,
                'paket_nama' => $item->paket->nama,
                'status' => $item->status,
                'status_pembayaran' => $item->status_pembayaran,
                'total_harga' => $item->total_harga,
            ];
        }));
    }

}