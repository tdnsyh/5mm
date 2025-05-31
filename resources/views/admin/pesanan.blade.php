<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <!-- Tabel Menunggu Konfirmasi -->
                <div class="mb-3">
                    <h4>Menunggu Konfirmasi</h4>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Paket</th>
                                    <th>Tanggal</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reservasiMenunggu as $i => $r)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $r->user->name }}</td>
                                        <td>{{ $r->paket->nama }}</td>
                                        <td>{{ $r->tanggal_reservasi }}</td>
                                        <td>{{ $r->alamat }}</td>
                                        <td>
                                            <form action="{{ route('admin.pesanan.konfirmasi', $r->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                <button name="aksi" value="diterima"
                                                    class="btn btn-success btn-sm">Terima</button>
                                                <button name="aksi" value="ditolak"
                                                    class="btn btn-danger btn-sm">Tolak</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Tidak ada reservasi menunggu.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Semua Reservasi -->
                <div>
                    <h4>Semua Pesanan</h4>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Paket</th>
                                    <th>Tanggal</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($semuaReservasi as $i => $r)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $r->user->name }}</td>
                                        <td>{{ $r->paket->nama }}</td>
                                        <td>{{ $r->tanggal_reservasi }}</td>
                                        <td><span
                                                class="badge bg-{{ $r->status_pembayaran == 'belum' ? 'danger' : ($r->status_pembayaran == 'diterima' ? 'success' : 'warning') }}">
                                                {{ ucfirst($r->status_pembayaran) }}
                                            </span></td>
                                        <td>
                                            <span
                                                class="badge bg-{{ ($r->status == 'menunggu' ? 'warning' : $r->status == 'selesai') ? 'success' : ($r->status == 'diterima' ? 'success' : 'danger') }}">
                                                {{ ucfirst($r->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.pesanan.show', $r->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Belum ada reservasi.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-admin>
