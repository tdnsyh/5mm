<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservasi;
use App\Models\Paket;
use App\Models\Testimoni;

class WebKeranjangController extends Controller
{

    public function index()
    {
        $title = 'Keranjang saya';
        $keranjangItems = Keranjang::with('paket')
                ->where('user_id', Auth::id())
                ->get();

        return view('web.keranjang', compact('keranjangItems','title'));
    }

    public function tambah($id)
    {

        $item = Keranjang::where('user_id', Auth::id())->where('paket_id', $id)->first();

        if ($item) {
            $item->jumlah += 1;
            $item->save();
        } else {
            Keranjang::create([
                'user_id' => Auth::id(),
                'paket_id' => $id,
                'jumlah' => 1
        ]);
    }

    return redirect()->route('user.keranjang')->with('success', 'Paket ditambahkan ke keranjang.');
    }

    public function create($paketId)
    {
        $paket = Paket::with('fotos')->findOrFail($paketId);
        $title='Form Reservasi';
        return view('web.form-reservasi', compact('paket','title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paket_id' => 'required|exists:paket,id',
            'tanggal_reservasi' => 'required|date|after_or_equal:today',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        $userId = Auth::id();
        $paket = Paket::findOrFail($request->paket_id);
        $kodeReservasi = 'RSV-' . time() . '-' . $userId;
        $totalHarga = $paket->harga;

        Reservasi::create([
            'user_id' => $userId,
            'paket_id' => $request->paket_id,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'kode_reservasi' => $kodeReservasi,
            'total_harga' => $totalHarga,
            'status' => 'menunggu',
        ]);

        Keranjang::where('user_id', $userId)
            ->where('paket_id', $request->paket_id)
            ->delete();

        return redirect()->route('user.pesanan')->with('success', 'Reservasi berhasil ditambahkan. Menunggu konfirmasi admin.');
    }

    public function hapus($id)
    {
        $item = Keranjang::findOrFail($id);
        if ($item->user_id == Auth::id()) {
            $item->delete();
        }

        return back()->with('success', 'Item dihapus dari keranjang.');
    }

    public function formPembayaran($id)
    {
        $reservasi = Reservasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('status', 'diterima')
            ->firstOrFail();

            $title='Form Pembayaran';

        return view('web.form-pembayaran', compact('reservasi','title'));
    }

    public function  pesananSaya()
    {
        $title = 'Pesanan Saya';
        $userId = Auth::id();

        $reservasiMenunggu = Reservasi::where('user_id', Auth::id())->where('status', 'menunggu')->get();
        $reservasiProses = Reservasi::where('user_id', Auth::id())
            ->where('status', 'diterima')
            ->whereIn('status_pembayaran', ['belum', 'dibayar','diterima'])->get();
        $reservasiSelesai = Reservasi::with('paket','testimoni')
            ->where('user_id', Auth::id())
            ->where('status', 'selesai')
            ->where('status_pembayaran', 'diterima')
            ->latest()
            ->get();
        $reservasiDitolak = Reservasi::where('user_id', Auth::id())
            ->where('status', 'ditolak')
            ->get();


    return view('web.pesanan', compact('reservasiMenunggu', 'reservasiProses', 'reservasiSelesai','reservasiDitolak','title'));
    }

    public function prosesPembayaran(Request $request, $id)
    {
        $request->validate([
            'metode_pembayaran' => 'required|in:transfer,cash',
            'bukti_transfer' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $reservasi = Reservasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('status', 'diterima')
            ->firstOrFail();

        $path = null;
        if ($request->metode_pembayaran === 'transfer' && $request->hasFile('bukti_transfer')) {
            $path = $request->file('bukti_transfer')->store('bukti-transfer', 'public');
        }

        $reservasi->update([
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => 'dibayar',
            'bukti_transfer' => $path,
        ]);

        return redirect()->route('user.pesanan')->with('success', 'Pembayaran berhasil dikonfirmasi.');
    }

    public function createTestimoni($id)
    {
        $title = 'Kirim Testimoni';
        $reservasi = Reservasi::with('paket')->findOrFail($id);

        $existing = Testimoni::where('user_id', Auth::id())
            ->where('reservasi_id', $reservasi->id)
            ->exists();

        if ($existing) {
            return redirect()->route('user.pesanan')->with('warning', 'Anda sudah mengirim testimoni untuk pesanan ini.');
        }

        return view('web.form-testimoni', compact('reservasi', 'title'));
    }

    public function storeTestimoni(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);

        $exists = Testimoni::where('user_id', Auth::id())
            ->where('reservasi_id', $reservasi->id)
            ->exists();

        if ($exists) {
            return redirect()->route('user.pesanan')->with('warning', 'Testimoni sudah pernah dikirim.');
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'pesan' => 'required|string|max:500',
        ]);

        Testimoni::create([
            'user_id' => Auth::id(),
            'reservasi_id' => $reservasi->id,
            'rating' => $request->rating,
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('user.pesanan')->with('success', 'Testimoni berhasil dikirim.');
    }

}