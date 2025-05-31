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
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col col-md-4">
                    <div class="card border shadow-none">
                        <img src="{{ asset('storage/' . $paket->fotos->first()->path) }}" class="img-fluid rounded mb-3">
                        <div class="card-body">
                            <h4 class="card-title">{{ $paket->nama }}</h4>
                            <p>
                                <span class="badge bg-primary">{{ $paket->type }}</span>
                                <span class="badge bg-info">{{ $paket->kategori }}</span>
                            </p>
                            <p class="card-text">{!! $paket->deskripsi !!}</p>
                            <h5 class="text-success fw-bold">Rp {{ number_format($paket->harga) }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col">
                    <form action="{{ route('user.pesanan.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="paket_id" value="{{ $paket->id }}">

                        <div class="mb-3">
                            <label for="tanggal_reservasi" class="form-label">Tanggal Reservasi</label>
                            <input type="date" id="tanggal_reservasi" name="tanggal_reservasi" class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">No Hp (yang bisa dihubungi)</label>
                            <input type="number" id="no_hp" name="no_hp" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Kirim Reservasi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
