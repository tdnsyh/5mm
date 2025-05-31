<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-none text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Transaksi</h5>
                                <p class="card-text fs-3">{{ $totalTransaksi }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-none text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Pendapatan</h5>
                                <p class="card-text fs-3">Rp {{ number_format($totalPendapatan, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Data pembayaran</h4>
                <div class="table-responsive">
                    <table class="table border-0">
                        <thead class="table-dark">
                            <tr class="border-0">
                                <th class="rounded-start">Kode Reservasi</th>
                                <th>Nama User</th>
                                <th>Paket</th>
                                <th>Tanggal Reservasi</th>
                                <th>Total Harga</th>
                                <th class="rounded-end">Status Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $item)
                                <tr>
                                    <td>{{ $item->kode_reservasi }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->paket->nama_paket ?? '-' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tanggal_reservasi)->format('d-m-Y') }}</td>
                                    <td>Rp {{ number_format($item->total_harga, 2, ',', '.') }}</td>
                                    <td>
                                        <span class="badge bg-success">{{ ucfirst($item->status_pembayaran) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div>
                    {{ $transaksi->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</x-layout-admin>
