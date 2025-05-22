<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h1 class="mb-3">{{ $artikel->judul }}</h1>
            @if ($artikel->gambar)
                <img src="{{ asset('images/' . $artikel->gambar) }}" class="card-img-top" alt="Gambar Artikel">
            @else
                <p>Gambar tidak tersedia</p>
            @endif
            <div class="card-body">
                <p class="card-text mb-0 mt-3"><strong>Penulis:</strong> {{ $artikel->penulis }}</p>
                <p class="card-text"><strong>Kategori:</strong> {{ $artikel->kategori }}</p>
                <div class="card-text mt-3">{!! $artikel->isi_berita !!}</div>
                <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
            </div>
        </div>
    </div>
</x-layout-admin>
