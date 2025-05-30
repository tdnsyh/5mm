<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="card mb-4 border shadow-none">
                <div class="card-body">
                    <h5 class="card-title">{{ $reservasi->paket->type }} - {{ $reservasi->paket->kategori }}</h5>
                    <p class="mb-1"><strong>Nama Paket:</strong> {{ $reservasi->paket->nama }}</p>
                    <p class="mb-1"><strong>Harga:</strong>
                        Rp{{ number_format($reservasi->paket->harga, 0, ',', '.') }}</p>
                    <p class="mb-1"><strong>Tanggal Reservasi:</strong> {{ $reservasi->tanggal_reservasi }}</p>
                    <p class="mb-0"><strong>Alamat:</strong> {{ $reservasi->alamat }}</p>
                </div>
            </div>
            <form action="{{ route('reservasi.bayar.proses', $reservasi->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="metode_pembayaran" class="form-label">Pilih Metode Pembayaran:</label>
                    <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="transfer">Transfer Bank</option>
                        <option value="cash">Cash</option>
                    </select>
                </div>

                <div class="mb-3" id="uploadBukti" style="display: none;">
                    <div class="mb-3">
                        <div class="card border shadow-none">
                            <div class="card-header bg-primary text-white">
                                Informasi Pembayaran
                            </div>
                            <div class="card-body">
                                <p>Silakan lakukan pembayaran ke rekening berikut senilai
                                    Rp{{ number_format($reservasi->paket->harga, 0, ',', '.') }}:</p>
                                <ul>
                                    <li><strong>Bank:</strong> BCA</li>
                                    <li><strong>No. Rekening:</strong> 1234567890</li>
                                    <li><strong>Atas Nama:</strong> PT Contoh Sukses</li>
                                </ul>
                                <p>Setelah melakukan pembayaran, harap konfirmasi melalui WhatsApp ke
                                    <strong>0812-3456-7890</strong> atau email ke <strong>admin@contoh.com</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <label for="bukti_transfer" class="form-label">Upload Bukti Transfer:</label>
                    <input type="file" class="form-control" name="bukti_transfer" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Konfirmasi Pembayaran</button>
            </form>

            <script>
                document.getElementById('metode_pembayaran').addEventListener('change', function() {
                    if (this.value === 'transfer') {
                        document.getElementById('uploadBukti').style.display = 'block';
                    } else {
                        document.getElementById('uploadBukti').style.display = 'none';
                    }
                });
            </script>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
