<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="card border shadow-none mb-3">
                            <div class="card-body">
                                <i class="ti ti-credit-card text-primary ms-0 display-5"></i>
                                <h5 class="card-title">Total Transaksi</h5>
                                <p class="card-text fs-3">{{ $totalTransaksi }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border shadow-none mb-3">
                            <div class="card-body">
                                <i class="ti ti-currency-dollar text-success ms-0 display-5"></i>
                                <h5 class="card-title">Total Pendapatan</h5>
                                <p class="card-text fs-3">Rp {{ number_format($totalPendapatan, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3">
                    @foreach ([['Pengguna', $jumlah_user, 'ti ti-users', 'primary'], ['Artikel', $jumlah_artikel, 'ti ti-article', 'info'], ['Portofolio', $jumlah_portofolio, 'ti ti-photo', 'success'], ['Paket', $jumlah_paket, 'ti ti-package', 'warning'], ['Reservasi', $jumlah_reservasi, 'ti ti-calendar', 'danger'], ['Testimoni', $jumlah_testimoni, 'ti ti-message-2', 'secondary']] as [$title, $count, $icon, $color])
                        <div class="col">
                            <div class="card border-start border-0 border-3 shadow-sm border-{{ $color }}">
                                <div class="card-body d-flex align-items-center">
                                    <i class="{{ $icon }} text-{{ $color }} me-3 display-5"></i>
                                    <div>
                                        <h6 class="mb-0">{{ $title }}</h6>
                                        <h3 class="mb-0">{{ $count }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
                    <div class="col">
                        {{-- Statistik Pembayaran --}}
                        <h4><i class="ti ti-wallet"></i> Statistik Pembayaran</h4>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                Belum Dibayar <span class="badge bg-danger">{{ $pembayaran['belum'] ?? 0 }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                Sudah Dibayar <span class="badge bg-warning">{{ $pembayaran['dibayar'] ?? 0 }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                Pembayaran Diterima <span
                                    class="badge bg-success">{{ $pembayaran['diterima'] ?? 0 }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        {{-- Distribusi Role --}}
                        <h4><i class="ti ti-users-group"></i> Role Pengguna</h4>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                Admin <span class="badge bg-dark">{{ $user_roles['admin'] ?? 0 }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                User <span class="badge bg-secondary">{{ $user_roles['user'] ?? 0 }}</span>
                            </li>
                        </ul>
                        {{-- Rating --}}
                        <h4 class="mt-3"><i class="ti ti-star"></i> Rata-Rata Rating</h4>
                        <p class="fs-4 text-warning">{{ $rata_rating }} <i class="ti ti-star-filled"></i> / 5</p>
                    </div>
                </div>

                {{-- Reservasi Terbaru --}}
                <h4 class="mt-3"><i class="ti ti-calendar"></i> Reservasi Terbaru</h4>
                <div class="table-responsive">
                    <table class="table border-0">
                        <thead class="table-dark">
                            <tr class="border-0">
                                <th class="rounded-start">Kode</th>
                                <th>User</th>
                                <th>Paket</th>
                                <th>Tanggal</th>
                                <th class="rounded-end">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservasi_terbaru as $r)
                                <tr>
                                    <td>{{ $r->kode_reservasi }}</td>
                                    <td>{{ $r->user->name }}</td>
                                    <td>{{ $r->paket->nama }}</td>
                                    <td>{{ $r->tanggal_reservasi }}</td>
                                    <td>
                                        <span
                                            class="badge bg-{{ $r->status === 'diterima'
                                                ? 'success'
                                                : ($r->status === 'ditolak'
                                                    ? 'danger'
                                                    : ($r->status === 'selesai'
                                                        ? 'secondary'
                                                        : 'warning')) }}">
                                            {{ ucfirst($r->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout-admin>
