<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;

class AdminLaporanController extends Controller
{
    public function index()
    {
        $title = 'Laporan';
        $data = Reservasi::latest()->get();
        return view('admin.laporan', compact('title','data'));
    }


    public function filter(Request $request)
    {
        $query = Reservasi::query();

        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        if ($request->has('status_pembayaran') && $request->status_pembayaran != '') {
            $query->where('status_pembayaran', $request->status_pembayaran);
        }

        if ($request->has('tanggal_dari') && $request->has('tanggal_sampai')) {
            $query->whereBetween('tanggal_reservasi', [$request->tanggal_dari, $request->tanggal_sampai]);
        }

        if ($request->has('metode_pembayaran') && $request->metode_pembayaran != '') {
            $query->where('metode_pembayaran', $request->metode_pembayaran);
        }

        $data = $query->get();

        return view('admin.laporan', compact('data'));
    }
}