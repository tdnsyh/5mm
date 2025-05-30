<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="mb-4">
                <span class="badge text-bg-dark mb-2">Pesanan</span>
                <h1>{{ $title }}</h1>
                <hr>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="menunggu-tab" data-bs-toggle="tab"
                        data-bs-target="#menunggu-tab-pane" type="button" role="tab"
                        aria-controls="menunggu-tab-pane" aria-selected="true">Menunggu Konfirmasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="proses-tab" data-bs-toggle="tab" data-bs-target="#proses-tab-pane"
                        type="button" role="tab" aria-controls="proses-tab-pane"
                        aria-selected="false">Proses</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="selesai-tab" data-bs-toggle="tab" data-bs-target="#selesai-tab-pane"
                        type="button" role="tab" aria-controls="selesai-tab-pane"
                        aria-selected="false">Selesai</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ditolak-tab" data-bs-toggle="tab" data-bs-target="#ditolak-tab-pane"
                        type="button" role="tab" aria-controls="ditolak-tab-pane"
                        aria-selected="false">Ditolak</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                {{-- Tab Menunggu --}}
                <div class="tab-pane fade show active" id="menunggu-tab-pane" role="tabpanel"
                    aria-labelledby="menunggu-tab" tabindex="0">
                    <div class="mt-4">
                        @forelse ($reservasiMenunggu as $item)
                            <div class="card mb-3 border shadow-none">
                                <div class="card-body">
                                    <h5 class="mb-3">{{ $item->paket->type }} - {{ $item->paket->kategori }} -
                                        {{ $item->paket->nama }}</h5>
                                    <p class="mb-1"><strong>Tanggal Reservasi:</strong> {{ $item->tanggal_reservasi }}
                                    </p>
                                    <p><strong>Alamat:</strong> {{ $item->alamat }}</p>
                                    <span class="badge bg-warning text-dark">Menunggu Konfirmasi</span>
                                </div>
                            </div>
                        @empty
                            <p>Tidak ada reservasi yang menunggu konfirmasi.</p>
                        @endforelse
                    </div>
                </div>

                {{-- Tab Proses --}}
                <div class="tab-pane fade" id="proses-tab-pane" role="tabpanel" aria-labelledby="proses-tab"
                    tabindex="0">
                    <div class="mt-4">
                        @forelse ($reservasiProses as $item)
                            <div class="card mb-3 border shadow-none">
                                <div class="card-body">
                                    <h5 class="mb-3">{{ $item->paket->type }} - {{ $item->paket->kategori }} -
                                        {{ $item->paket->nama }}</h5>
                                    <p class="mb-1"><strong>Tanggal Reservasi:</strong>
                                        {{ $item->tanggal_reservasi }}</p>
                                    <p><strong>Alamat:</strong> {{ $item->alamat }}</p>

                                    <span class="badge bg-info text-dark">Diterima</span>
                                    <p class="mt-2"><strong>Pembayaran:</strong>
                                        @if ($item->status_pembayaran === 'belum')
                                            <span class="text-danger">Belum Dibayar</span>
                                        @elseif ($item->status_pembayaran === 'dibayar')
                                            <span class="text-warning">Menunggu Konfirmasi Pembayaran</span>
                                        @elseif ($item->status_pembayaran === 'diterima')
                                            <span class="text-success">Diterima</span>
                                        @endif
                                    </p>

                                    @if ($item->status == 'diterima' && $item->status_pembayaran == 'belum')
                                        <a href="{{ route('reservasi.bayar.form', $item->id) }}"
                                            class="btn btn-success btn-sm mt-2">
                                            Bayar Sekarang
                                        </a>
                                    @endif

                                    @if ($item->metode_pembayaran === 'transfer' && $item->bukti_transfer)
                                        <p class="mt-2">
                                            <strong>Bukti Transfer:</strong><br>
                                            <a href="{{ asset('storage/' . $item->bukti_transfer) }}" target="_blank"
                                                class="btn btn-outline-secondary btn-sm">Lihat Bukti</a>
                                        </p>
                                        @php
                                            $pesan =
                                                "Halo Admin, saya ingin mengonfirmasi reservasi saya dengan detail berikut:\n\n" .
                                                "Paket: {$item->paket->type} - {$item->paket->kategori} - {$item->paket->nama}\n" .
                                                "Tanggal Reservasi: {$item->tanggal_reservasi}\n" .
                                                "Alamat: {$item->alamat}\n\n" .
                                                "Status Reservasi: Diterima\n\n";

                                            if ($item->status_pembayaran === 'belum') {
                                                $pesan .= "Status Pembayaran: Belum Dibayar\n";
                                            } elseif ($item->status_pembayaran === 'dibayar') {
                                                $pesan .= "Status Pembayaran: Menunggu Konfirmasi Pembayaran\n";
                                            } elseif ($item->status_pembayaran === 'diterima') {
                                                $pesan .= "Status Pembayaran: Diterima\n";
                                            }

                                            if ($item->metode_pembayaran === 'transfer' && $item->bukti_transfer) {
                                                $pesan .=
                                                    "\nBukti Transfer: Sudah diunggah. Silakan periksa pada sistem.";
                                            }

                                            $pesan .= "\n\nTerima kasih.";

                                            $waUrl = 'https://wa.me/6285318227724?text=' . urlencode($pesan);
                                        @endphp

                                        <a href="{{ $waUrl }}" class="btn btn-success"
                                            target="_blank">Konfirmasi Pembayaran via WhatsApp</a>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <p>Tidak ada reservasi dalam proses.</p>
                        @endforelse
                    </div>
                </div>

                {{-- Tab Selesai --}}
                <div class="tab-pane fade" id="selesai-tab-pane" role="tabpanel" aria-labelledby="selesai-tab"
                    tabindex="0">
                    <div class="mt-4">
                        @forelse ($reservasiSelesai as $item)
                            <div class="card mb-3 border shadow-none">
                                <div class="card-body">
                                    <h5 class="mb-3">{{ $item->paket->type }} - {{ $item->paket->kategori }} -
                                        {{ $item->paket->nama }}</h5>
                                    <p class="mb-1"><strong>Tanggal Reservasi:</strong>
                                        {{ $item->tanggal_reservasi }}</p>
                                    <p><strong>Alamat:</strong> {{ $item->alamat }}</p>
                                    <span class="badge bg-success text-dark">Selesai</span>

                                    <div class="mt-3">
                                        @if ($item->testimoni)
                                            <div class="mt-2 p-3 bg-warning-subtle rounded">
                                                <p class="mb-0"><strong>Rating:
                                                    </strong>{{ $item->testimoni->rating }}</p>
                                                <p class="mb-0">{{ $item->testimoni->pesan }}</p>
                                                <p class="text-muted mb-0" style="font-size: 0.85rem;">Dikirim pada
                                                    {{ $item->testimoni->created_at->format('d M Y H:i') }}</p>
                                            </div>
                                        @else
                                            <a href="{{ route('testimoni.form', $item->id) }}"
                                                class="btn btn-outline-primary btn-sm">
                                                Kirim Testimoni
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Tidak ada reservasi yang selesai.</p>
                        @endforelse
                    </div>
                </div>
                {{-- Tab Ditolak --}}
                <div class="tab-pane fade" id="ditolak-tab-pane" role="tabpanel" aria-labelledby="ditolak-tab"
                    tabindex="0">
                    <div class="mt-4">
                        @forelse ($reservasiDitolak as $item)
                            <div class="card mb-3 border shadow-none">
                                <div class="card-body">
                                    <h5 class="mb-3">{{ $item->paket->type }} - {{ $item->paket->kategori }} -
                                        {{ $item->paket->nama }}</h5>
                                    <p class="mb-1"><strong>Tanggal Reservasi:</strong>
                                        {{ $item->tanggal_reservasi }}</p>
                                    <p><strong>Alamat:</strong> {{ $item->alamat }}</p>
                                    <span class="badge bg-danger text-light">Ditolak</span>
                                    @if (!empty($item->keterangan_ditolak))
                                        <p class="mt-2 text-danger"><strong>Alasan Penolakan:</strong>
                                            {{ $item->keterangan_ditolak }}</p>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <p>Tidak ada reservasi yang ditolak.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
