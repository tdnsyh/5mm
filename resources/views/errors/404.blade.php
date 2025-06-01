<x-layout-web>
    <x-slot:title>{{ $title ?? 'Error' }}</x-slot:title>
    <section class="py-3 py-md-5 d-flex align-items-center" style="min-height: 100vh;">
        <div class="container text-center">
            <h1 class="display-1 fw-semibold text-danger">404</h1>
            <p class="fs-4">Oops! Halaman yang Anda cari tidak ditemukan.</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
    </section>
</x-layout-web>
