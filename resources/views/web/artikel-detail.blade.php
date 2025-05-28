<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('images/' . $berita->gambar) }}" class="object-fit-cover rounded"
                            alt="{{ $berita->judul }}">
                    </div>
                    <h2 class="mb-3 mt-md-4 mt-3">{{ $berita->judul }}</h2>
                    <span class="text-black">{{ $berita->kategori }}</span>
                    <p class="mb-1">{{ $berita->created_at->format('l, d F Y') }}</p>
                    <div class="card-body">
                        <p style="text-align: justify">{!! $berita->isi_berita !!}</p>
                    </div>
                </div>
                <div class="col">
                    <h3 class="card-title mb-3">
                        Berita lainnya
                    </h3>
                    @foreach ($beritaLainnya as $otherArtikel)
                        <div class="card border shadow-none mb-3">
                            <div class="ratio ratio-21x9">
                                <img src="{{ asset('images/' . $otherArtikel->gambar) }}"
                                    class="object-fit-cover card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <a href="{{ route('detail.berita', ['kategori' => Str::slug($otherArtikel->kategori), 'id' => $otherArtikel->id, 'judul' => Str::slug($otherArtikel->judul)]) }}"
                                    class="text-decoration-none text-dark card-title">{{ $otherArtikel->judul }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
