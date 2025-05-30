<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="text-">
                <span class="badge text-bg-dark mb-2">Portofolio</span>
                <h1 class="fw-bold">Beberapa karya terbaik</h1>
                <hr>
                <p>Jelajahi karya terbaik kami dalam fotografi dan videografi yang menghadirkan momen penuh
                    cerita dengan kualitas dan kreativitas unggulan.</p>
            </div>
            <div class="masonry-columns">
                @foreach ($portofolios as $portofolio)
                    @foreach ($portofolio->photos as $foto)
                        <img src="{{ asset('storage/' . $foto->path) }}" alt="{{ $portofolio->judul }}"
                            class="masonry-item">
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
