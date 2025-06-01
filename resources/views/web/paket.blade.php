<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>

    {{-- hero --}}
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="text-">
                <span class="badge text-bg-dark mb-2">Paket</span>
                <h1 class="fw-bold">Paket yang kami sediakan</h1>
                <hr>
            </div>
            <div class="mt-3">
                <ul class="nav nav-tabs mb-3" id="filterTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-category="all"
                            type="button">Semua</button>
                    </li>
                    @foreach ($pakets->pluck('kategori')->unique() as $kategori)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-category="{{ $kategori }}"
                                type="button">
                                {{ $kategori }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($pakets as $paket)
                    <div class="col" data-category="{{ $paket->kategori }}">
                        <div class="card mb-3 border shadow-none">
                            @if ($paket->fotos->count() > 0)
                                <div id="carouselPaket{{ $paket->id }}" class="carousel slide"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($paket->fotos as $index => $foto)
                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                <div class="ratio ratio-16x9">
                                                    <img src="{{ asset('storage/' . $foto->path) }}"
                                                        class="d-block w-100 object-fit-cover rounded">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @if ($paket->fotos->count() > 1)
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselPaket{{ $paket->id }}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselPaket{{ $paket->id }}" data-bs-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </button>
                                    @endif
                                </div>
                            @endif
                            <div class="card-body">
                                <p>
                                    <span class="badge bg-primary">{{ $paket->type }}</span>
                                    <span class="badge bg-info">{{ $paket->kategori }}</span>
                                </p>
                                <h5 class="card-title">{{ $paket->nama }}</h5>
                                <p class="h4 card-text fw-semibold mb-2">Rp {{ number_format($paket->harga) }}
                                </p>
                                <a href="{{ route('paket.detail', $paket->id) }}"
                                    class="btn btn-outline-info w-100 mt-2">Lihat</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll('#filterTabs .nav-link');
            const cards = document.querySelectorAll('.col[data-category]');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    const selectedCategory = this.getAttribute('data-category');

                    cards.forEach(card => {
                        if (selectedCategory === 'all' || card.getAttribute(
                                'data-category') === selectedCategory) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

    <x-footer-web></x-footer-web>
</x-layout-web>
