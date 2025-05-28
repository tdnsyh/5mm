<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>


    {{-- artikel/blog --}}
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="mb-4">
                <span class="badge text-bg-dark mb-2">Blog</span>
                <h1>Blog & Artikel Inspiratif</h1>
                <p>Selamat datang di blog kami!
                    Di sini, kami berbagi cerita, tips, inspirasi, dan panduan seputar dunia fotografi, pernikahan, gaya
                    hidup, dan banyak lagi.</p>
                <hr>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
                @foreach ($berita as $artikel)
                    <div class="col">
                        <div class="card border shadow-none">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('images/' . $artikel->gambar) }}"
                                    class="rounded img-fluid object-fit-cover h-100" alt="{{ $artikel->judul }}">
                            </div>
                            <div class="card-body">
                                <span class="badge text-white bg-success mb-2">
                                    {{ $artikel->kategori }}
                                </span>
                                <h5 class="card-title mb-0">{{ $artikel->judul }}</h5>
                                <p class="card-text mt-2">
                                    {!! Str::limit(strip_tags($artikel->isi_berita), 100) !!}...
                                    <a href="{{ route('detail.berita', ['kategori' => Str::slug($artikel->kategori), 'id' => $artikel->id, 'judul' => Str::slug($artikel->judul)]) }}"
                                        class="link-underline link-underline-opacity-0">
                                        Selengkapnya
                                    </a>
                                </p>
                                <p class="text-secondary">{{ $artikel->created_at->format('l, d F Y') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $berita->links() }}
            </div>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
