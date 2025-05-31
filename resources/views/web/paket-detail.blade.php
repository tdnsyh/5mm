<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="mb-4">
                <span class="badge text-bg-dark mb-2">Detail</span>
                <h1>{{ $title }}</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-6">
                    @if ($paket->fotos->count() > 0)
                        <div class="mb-3">
                            <div class="ratio ratio-4x3 mb-2">
                                <img id="mainImage" src="{{ asset('storage/' . $paket->fotos->first()->path) }}"
                                    class="img-fluid rounded object-fit-cover w-100">
                            </div>
                            <div class="d-flex gap-2 overflow-auto">
                                @foreach ($paket->fotos as $foto)
                                    <img src="{{ asset('storage/' . $foto->path) }}"
                                        class="img-fluid shadow-none border-0 object-fit-cover rounded"
                                        style="width: 100px; cursor: pointer;"
                                        onclick="document.getElementById('mainImage').src = this.src;">
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <h1 class="mb-3">{{ $paket->nama }}</h1>
                    <p>
                        <span class="badge bg-primary">{{ $paket->type }}</span>
                        <span class="badge bg-info">{{ $paket->kategori }}</span>
                    </p>
                    <p style="text-align: justify">{!! $paket->deskripsi !!}</p>
                    <h2 class="text-danger fw-semibold mb-3">Rp {{ number_format($paket->harga) }}</h2>

                    <div class="d-flex gap-2 mb-2">
                        <form action="{{ route('user.keranjang.tambah', $paket->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-primary">Tambah ke Keranjang</button>
                        </form>

                        <a href="{{ route('user.pesanan.form', $paket->id) }}" class="btn btn-primary">Reservasi
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
