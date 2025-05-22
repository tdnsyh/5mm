<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <h3>{{ $portofolio->judul }}</h3>
                <p>{{ $portofolio->deskripsi }}</p>
                <div class="row row-cols-2 row-cols-md-4">
                    @foreach ($portofolio->photos as $photo)
                        <div class="col">
                            <img src="{{ asset('storage/' . $photo->path) }}" class="img-fluid rounded">
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('portofolio.index') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</x-layout-admin>
