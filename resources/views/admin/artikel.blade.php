<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="tombol mt-3">
                <a href="{{ route('artikel.create') }}" class="btn btn-primary mb-3">Tambah Artikel</a>
            </div>
            @if ($artikel->isEmpty())
                <div class="alert alert-warning" role="alert">
                    Belum ada artikel yang ditambahkan.
                </div>
            @else
                <div class="row">
                    @foreach ($artikel as $a)
                        <div class="col-md-4">
                            <div class="card h-100 border shadow-none">
                                @if ($a->gambar)
                                    <div class="ratio ratio-16x9">
                                        <img src="{{ asset('images/' . $a->gambar) }}"
                                            class="img-fluid object-fit-cover rounded" alt="Gambar Artikel">
                                    </div>
                                @endif
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">{{ $a->judul }}</h5>
                                    <p class="card-text mb-2">
                                        <strong>Penulis:</strong> {{ $a->penulis }}<br>
                                        <strong>Kategori:</strong> {{ $a->kategori }}
                                    </p>
                                    <div class="d-flex justify-content-start gap-2">
                                        <a href="{{ route('artikel.show', $a->id) }}" class="btn btn-info btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('artikel.edit', $a->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('artikel.destroy', $a->id) }}" method="POST"
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
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-layout-admin>
