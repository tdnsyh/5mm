<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <a href="{{ route('portofolio.create') }}" class="btn btn-primary mb-3">Tambah portofolio</a>

                @if ($portofolios->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        Belum ada portofolio.
                    </div>
                @else
                    <div class="row row-cols-1 row-cols-md-3">
                        @foreach ($portofolios as $item)
                            <div class="col">
                                <div class="card">
                                    <div id="carouselPortofolio{{ $item->id }}" class="carousel slide"
                                        data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($item->photos as $index => $photo)
                                                <div
                                                    class="carousel-item @if ($index == 0) active @endif">
                                                    <div class="ratio ratio-16x9">
                                                        <img src="{{ asset('storage/' . $photo->path) }}"
                                                            class="d-block card-img-top w-100 object-fit-cover"
                                                            alt="...">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @if ($item->photos->count() > 1)
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselPortofolio{{ $item->id }}"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselPortofolio{{ $item->id }}"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                        <p class="card-text">{{ $item->deskripsi }}</p>
                                        <a href="{{ route('portofolio.show', $item) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                        <form action="{{ route('portofolio.destroy', $item->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
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
