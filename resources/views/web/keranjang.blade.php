<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="mb-4">
                <span class="badge text-bg-dark mb-2">Keranjang</span>
                <h1>{{ $title }}</h1>
                <hr>
            </div>

            @if ($keranjangItems->isEmpty())
                <div class="alert alert-info">Keranjang Anda masih kosong.</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Paket</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keranjangItems as $item)
                            <tr>
                                <td>{{ $item->paket->nama }}</td>
                                <td>{{ $item->paket->type }} - {{ $item->paket->kategori }}</td>
                                <td>Rp {{ number_format($item->paket->harga) }}</td>
                                <td>
                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <form action="{{ route('keranjang.hapus', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                        <a href="{{ route('reservasi.form', $item->paket->id) }}" class="btn btn-info">
                                            <i class="bi bi-cart"></i> Reservasi
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
