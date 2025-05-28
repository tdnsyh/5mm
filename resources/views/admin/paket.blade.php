<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <a href="{{ route('paket.create') }}" class="btn btn-primary mb-3">Tambah Paket</a>

                @if ($pakets->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        Belum ada paket yang ditambahkan.
                    </div>
                @else
                    <div class="row row-cols-1 row-cols-md-3">
                        @foreach ($pakets as $paket)
                            <div class="col">
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
                                                    data-bs-target="#carouselPaket{{ $paket->id }}"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                    data-bs-target="#carouselPaket{{ $paket->id }}"
                                                    data-bs-slide="next">
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

                                        <a href="{{ route('paket.show', $paket) }}"
                                            class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ route('paket.edit', $paket) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('paket.destroy', $paket) }}" method="POST"
                                            class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout-admin>
