<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <form action="{{ route('laporan.filter') }}" method="GET" class="row g-3 mb-4">
                    <div class="col-md-3">
                        <label>Status Reservasi</label>
                        <select name="status" class="form-select">
                            <option value="">Semua</option>
                            <option value="menunggu">Menunggu</option>
                            <option value="diterima">Diterima</option>
                            <option value="ditolak">Ditolak</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Status Pembayaran</label>
                        <select name="status_pembayaran" class="form-select">
                            <option value="">Semua</option>
                            <option value="belum">Belum</option>
                            <option value="dibayar">Dibayar</option>
                            <option value="diterima">Diterima</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label>Dari Tanggal</label>
                        <input type="date" name="tanggal_dari" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Sampai Tanggal</label>
                        <input type="date" name="tanggal_sampai" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Metode Pembayaran</label>
                        <select name="metode_pembayaran" class="form-select">
                            <option value="">Semua</option>
                            <option value="transfer">Transfer</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <button type="button" class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
                    </div>
                </form>

                {{-- Table --}}
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark border-0">
                            <tr>
                                <th class="rounded-start">Kode</th>
                                <th>Tanggal</th>
                                <th>User</th>
                                <th>Paket</th>
                                <th>Status</th>
                                <th>Pembayaran</th>
                                <th class="rounded-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $row)
                                <tr>
                                    <td>{{ $row->kode_reservasi }}</td>
                                    <td>{{ $row->tanggal_reservasi }}</td>
                                    <td>{{ $row->user->name ?? '-' }}</td>
                                    <td>{{ $row->paket->nama_paket ?? '-' }}</td>
                                    <td><span class="badge bg-info">{{ $row->status }}</span></td>
                                    <td><span class="badge bg-warning">{{ $row->status_pembayaran }}</span></td>
                                    <td>Rp{{ number_format($row->total_harga, 0, ',', '.') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        function downloadExcel() {
            let table = document.querySelector("table");
            let workbook = XLSX.utils.table_to_book(table, {
                sheet: "Laporan"
            });
            XLSX.writeFile(workbook, "laporan_reservasi.xlsx");
        }
    </script>

</x-layout-admin>
