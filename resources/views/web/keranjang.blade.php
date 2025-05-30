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
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
