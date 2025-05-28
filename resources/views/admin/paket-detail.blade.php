<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <h5 class="card-title">{{ $paket->nama }}</h5>
                <p class="card-text"><strong>Kategori:</strong> {{ $paket->kategori }}</p>
                <p class="card-text"><strong>Type:</strong> {{ $paket->type }}</p>
                <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($paket->harga) }}</p>
                <p class="card-text"><strong>Deskripsi:</strong><br>{{ $paket->deskripsi }}</p>

                <h6 class="mt-3">Foto-foto:</h6>
                <div class="d-flex flex-wrap">
                    @foreach ($paket->fotos as $foto)
                        <img src="{{ asset('storage/' . $foto->path) }}" class="me-2 mb-2 rounded"
                            style="width: 250px;">
                    @endforeach
                </div>

                <a href="{{ route('paket.index') }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</x-layout-admin>
