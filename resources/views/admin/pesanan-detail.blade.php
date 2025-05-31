<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="mb-3">
                            <strong>Nama Pengguna:</strong> {{ $reservasi->user->name }}
                        </div>

                        <div class="mb-3">
                            <strong>Kode Reservasi:</strong> {{ $reservasi->kode_reservasi }} <br>
                            <strong>Paket:</strong> {{ $reservasi->paket->nama }} <br>
                            <strong>Tanggal Reservasi:</strong> {{ $reservasi->tanggal_reservasi }} <br>
                            <strong>Jumlah:</strong> {{ $reservasi->no_hp }} <br>
                            <strong>Alamat:</strong> {{ $reservasi->alamat }} <br>
                            <strong>Status:</strong>
                            <span class="badge bg-secondary mt-3">{{ $reservasi->status }}</span>
                        </div>
                        <h3 class="mb-3"><strong>Jumlah:</strong> Rp. {{ $reservasi->total_harga }} </h3>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <strong>Pembayaran:</strong><br>
                            Metode: {{ ucfirst($reservasi->metode_pembayaran ?? '-') }} <br>
                            Status: <span
                                class="badge bg-{{ $reservasi->status_pembayaran === 'dibayar' ? 'success' : 'warning' }}">
                                {{ ucfirst($reservasi->status_pembayaran) }}
                            </span>

                            @if ($reservasi->bukti_transfer)
                                <div class="mt-2">
                                    <strong>Bukti Transfer:</strong><br>
                                    <img src="{{ asset('storage/' . $reservasi->bukti_transfer) }}"
                                        class="img-fluid rounded border-0" width="300">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if ($reservasi->status === 'selesai')
                    <div class="card mt-4 border shadow-none">
                        <div class="card-header bg-success text-white">
                            Testimoni Pengguna
                        </div>
                        <div class="card-body">
                            @if ($reservasi->testimoni)
                                <p>"{{ $reservasi->testimoni->pesan }}"</p>
                                <p class="mb-0"><strong>Rating:</strong>
                                    @for ($i = 0; $i < $reservasi->testimoni->rating; $i++)
                                        ⭐
                                    @endfor
                                </p>
                            @else
                                <p class="text-muted mb-0">Belum ada testimoni dari pengguna.</p>
                            @endif
                        </div>
                    </div>
                @else
                    <form action="{{ route('admin.pesanan.update', $reservasi->id) }}" method="POST" class="mb-3">
                        @csrf
                        <label for="status_pembayaran" class="form-label">Ubah Status Pembayaran:</label>
                        <select name="status_pembayaran" id="status_pembayaran" class="form-select mb-2" required>
                            <option value="belum" {{ $reservasi->status_pembayaran == 'belum' ? 'selected' : '' }}>
                                Belum</option>
                            <option value="dibayar" {{ $reservasi->status_pembayaran == 'dibayar' ? 'selected' : '' }}>
                                Dibayar</option>
                            <option value="diterima"
                                {{ $reservasi->status_pembayaran == 'diterima' ? 'selected' : '' }}>Diterima</option>
                        </select>

                        <label for="status" class="form-label">Ubah Status Pesanan:</label>
                        <select name="status" id="status" class="form-select mb-2" required>
                            <option value="menunggu" {{ $reservasi->status == 'menunggu' ? 'selected' : '' }}>Menunggu
                            </option>
                            <option value="diterima" {{ $reservasi->status == 'diterima' ? 'selected' : '' }}>Diterima
                            </option>
                            <option value="ditolak" {{ $reservasi->status == 'ditolak' ? 'selected' : '' }}>Ditolak
                            </option>
                            <option value="selesai" {{ $reservasi->status == 'selesai' ? 'selected' : '' }}>Selesai
                            </option>
                        </select>

                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </form>
                @endif
                <a href="/admin/pesanan" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</x-layout-admin>
