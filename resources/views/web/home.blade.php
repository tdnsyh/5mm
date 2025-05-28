<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <style>

    </style>

    {{-- hero section --}}
    <section class="pt-3">
        <div class="container-fluid">
            <div class="card text-bg-dark border-0 shadow-none">
                <div class="ratio ratio-21x9">
                    <img src="https://images.unsplash.com/photo-1519458246479-6acae7536988?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img object-fit-cover" alt="...">
                </div>
                <div class="card-img-overlay p-4 p-md-5 d-flex flex-column justify-content-between"
                    style="background: rgba(0,0,0,0.6);">
                    <div class="col-md-8 text-center text-md-start mb-4">
                        <p class="display-3 fw-bold">
                            Capturing beautiful moment inside lens and shutterspeed.
                        </p>
                    </div>
                    <div class="row g-4 d-none d-md-flex pt-5">
                        <div class="col-md-6">
                            <div class="d-flex flex-wrap gap-2">
                                <a href="/" class="btn btn-outline-secondary rounded-5">Fotografi</a>
                                <a href="/" class="btn btn-outline-secondary rounded-5">Videografi</a>
                                <a href="/" class="btn btn-outline-secondary rounded-5">Graduation</a>
                                <a href="/" class="btn btn-outline-secondary rounded-5">Wedding</a>
                                <a href="/" class="btn btn-outline-secondary rounded-5">Prewedding</a>
                                <a href="/" class="btn btn-outline-secondary rounded-5">Photo</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet.</p>
                            <hr class="fw-semibold">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="card border-0 card-glass">
                                        <div class="card-body p-2">
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="https://images.unsplash.com/photo-1744309546253-a1200c7e6141?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                            alt="" class="img-fluid object-fit-cover rounded">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="card-text text-white">Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card border-0 card-glass">
                                        <div class="card-body p-2">
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <div class="ratio ratio-1x1">
                                                        <img src="https://images.unsplash.com/photo-1744309546253-a1200c7e6141?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                            alt="" class="img-fluid object-fit-cover rounded">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="card-text text-white">Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- tentang --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-2 border-0 shadow-none">
                <div class="card-body p-0">
                    <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">
                        <div class="col">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.unsplash.com/photo-1652115741546-97a468d4a069?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="" class="img-fluid rounded object-fit-cover">
                            </div>
                        </div>
                        <div class="col px-5 py-5 py-md-2">
                            <span class="badge text-bg-dark mb-2">Tentang</span>
                            <h1 class="fw-bold">5mm Project</h1>
                            <hr>
                            <p style="text-align: justify">
                                5mm adalah layanan dokumentasi profesional yang mengabadikan setiap momen berharga
                                Anda melalui lensa penuh makna. Berbasis di Tasikmalaya, kami mengkhususkan diri dalam
                                fotografi dan videografi untuk pernikahan, event, produk, hingga kebutuhan personal.
                            </p>
                            <div class="row pt-3">
                                <div class="col">
                                    <h3 class="fw-semibold">500++</h3>
                                    <h5>Proyek sukses</h5>
                                </div>
                                <div class="col">
                                    <h3 class="fw-semibold">100%</h3>
                                    <h5>Klien puas</h5>
                                </div>
                            </div>
                            <a href="/tentang" class="btn btn-outline-dark mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- layanan --}}
    <section class="py-5 bg-1">
        <div class="container">
            <div class="row row-cols-md-3 d-flex align-items-center">
                <div class="col-12 col">
                    <span class="badge text-bg-dark mb-2">Layanan</span>
                    <h1 class="fw-bold text-white">Layanan Kami</h1>
                    <hr>
                    <p>Kami menyediakan berbagai layanan profesional yang siap mengabadikan setiap momen berharga Anda
                        dengan kualitas terbaik dan sentuhan kreatif.</p>
                </div>
                <div class="col-6 col">
                    <div class="card text-white border-0 position-relative overflow-hidden">
                        <div class="ratio ratio-16x9">
                            <img src="https://images.unsplash.com/photo-1536632087471-3cf3f2986328?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img object-fit-cover" alt="Fotografi">
                        </div>
                        <div
                            class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
                            <h3 class="text-white text-center">Fotografi</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 col">
                    <div class="card text-white border-0 position-relative overflow-hidden">
                        <div class="ratio ratio-16x9">
                            <img src="https://images.unsplash.com/photo-1611349540939-927c682216fa?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img object-fit-cover" alt="Videografi">
                        </div>
                        <div
                            class="card-img-overlay d-flex align-items-center justify-content-center bg-dark bg-opacity-50">
                            <h3 class="text-white text-center">Videografi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- portofolio --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center">
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
            <div class="text-center">
                <a href="/portofolio" class="btn btn-outline-dark mt-3">Selengkapnya</a>
            </div>
        </div>
    </section>

    {{-- paket --}}
    <section class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-between align-items-end">
                <div class="col">
                    <span class="badge text-bg-dark mb-2">Paket</span>
                    <h1>Paket yang Kami Sediakan</h1>
                    <p>Kami menawarkan berbagai pilihan paket fotografi dan videografi yang fleksibel dan sesuai
                        kebutuhan.</p>
                </div>
                <div class="col text-md-end">
                    <p class="mb-1">Ingin melihat paket lainnya?</p>
                    <a href="/paket" class="btn btn-outline-dark">Lihat</a>
                </div>
            </div>
            <hr>
            <div class="row row-cols-1 row-cols-md-4">
                <div class="col">
                    <a href="/detail-event" class="text-decoration-none">
                        <div class="card text-bg-dark border-0 shadow-none card-hover-dark">
                            <div class="ratio ratio-1x1">
                                <img src="https://images.unsplash.com/photo-1510127034890-ba27508e9f1c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img object-fit-cover" alt="...">
                            </div>
                            <div
                                class="card-img-overlay d-flex flex-column justify-content-end gradient-overlay-bottom">
                                <p class="card-title text-white m-0">
                                    Capturing beautiful moment inside lens and shutterspeed.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/detail-event" class="text-decoration-none">
                        <div class="card text-bg-dark border-0 shadow-none card-hover-dark">
                            <div class="ratio ratio-1x1">
                                <img src="https://images.unsplash.com/photo-1510127034890-ba27508e9f1c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img object-fit-cover" alt="...">
                            </div>
                            <div
                                class="card-img-overlay d-flex flex-column justify-content-end gradient-overlay-bottom">
                                <p class="card-title text-white m-0">
                                    Capturing beautiful moment inside lens and shutterspeed.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/detail-event" class="text-decoration-none">
                        <div class="card text-bg-dark border-0 shadow-none card-hover-dark">
                            <div class="ratio ratio-1x1">
                                <img src="https://images.unsplash.com/photo-1510127034890-ba27508e9f1c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img object-fit-cover" alt="...">
                            </div>
                            <div
                                class="card-img-overlay d-flex flex-column justify-content-end gradient-overlay-bottom">
                                <p class="card-title text-white m-0">
                                    Capturing beautiful moment inside lens and shutterspeed.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/detail-event" class="text-decoration-none">
                        <div class="card text-bg-dark border-0 shadow-none card-hover-dark">
                            <div class="ratio ratio-1x1">
                                <img src="https://images.unsplash.com/photo-1510127034890-ba27508e9f1c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img object-fit-cover" alt="...">
                            </div>
                            <div
                                class="card-img-overlay d-flex flex-column justify-content-end gradient-overlay-bottom">
                                <p class="card-title text-white m-0">
                                    Capturing beautiful moment inside lens and shutterspeed.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- faq --}}
    <section class="bg-2 py-5">
        <div class="container">
            <div class="text-center">
                <span class="badge text-bg-dark mb-2">FaQ</span>
                <h1>FAQ – Pertanyaan Umum tentang 5mm</h1>
                <hr>
                <p>Temukan jawaban atas pertanyaan yang paling sering diajukan mengenai layanan, proses pemesanan,
                    pembayaran, hingga hasil akhir dari tim 5mm.</p>
            </div>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer1" aria-expanded="true" aria-controls="answer1">
                            Apa itu 5mm.project?
                        </button>
                    </h2>
                    <div id="answer1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            5mm.project adalah jasa fotografi dan videografi profesional yang berbasis di Tasikmalaya,
                            melayani juga area Ciamis, Garut, dan Bandung.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                            Layanan apa saja yang ditawarkan?
                        </button>
                    </h2>
                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="faq2"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami menawarkan jasa dokumentasi foto dan video untuk prewedding, wedding, ulang tahun,
                            produk, corporate event, dan konten kreatif.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                            Apakah 5mm.project hanya melayani area tertentu?
                        </button>
                    </h2>
                    <div id="answer3" class="accordion-collapse collapse" aria-labelledby="faq3"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami berbasis di Tasikmalaya namun melayani juga Ciamis, Garut, Bandung, dan daerah
                            sekitarnya. Untuk luar kota, bisa dikonsultasikan terlebih dahulu.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer4" aria-expanded="false" aria-controls="answer4">
                            Bagaimana cara booking jasa 5mm.project?
                        </button>
                    </h2>
                    <div id="answer4" class="accordion-collapse collapse" aria-labelledby="faq4"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Anda bisa melakukan booking melalui WhatsApp, Instagram kami di @5mm.project, atau melalui
                            form pemesanan di website.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer5" aria-expanded="false" aria-controls="answer5">
                            Apakah hasil foto dan video bisa diedit sesuai keinginan klien?
                        </button>
                    </h2>
                    <div id="answer5" class="accordion-collapse collapse" aria-labelledby="faq5"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Tentu saja. Kami menyediakan revisi sesuai kebutuhan dan preferensi klien agar hasil akhir
                            sesuai ekspektasi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- testimoni --}}
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <span class="badge text-bg-dark mb-2">Testimoni</span>
                    <h1 class="fw-bold mt-2">Partner kreatif favorit klien kami</h1>
                    <p><span class="text-danger fw-bold">92%</span> klien merekomendasikan 5mm.project untuk layanan
                        foto & video</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-dark rounded px-3 p-2" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <i class="ti ti-arrow-left"></i>
                        </button>
                        <button class="btn btn-outline-dark rounded px-3 p-2" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <i class="ti ti-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-7">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="p-4 rounded bg-light">
                                    <p class="fs-5">“5mm.project berhasil menangkap momen pernikahan kami dengan
                                        sangat indah. Hasilnya luar biasa!”</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Avatar"
                                            class="rounded-circle me-3" width="48" height="48">
                                        <div>
                                            <div class="fw-semibold">Anisa Putri</div>
                                            <div class="text-muted small">Klien Pernikahan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="p-4 rounded bg-light">
                                    <p class="fs-5">“Video promosi bisnis kami jadi terlihat profesional banget!
                                        Terima kasih tim 5mm.project.”</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar"
                                            class="rounded-circle me-3" width="48" height="48">
                                        <div>
                                            <div class="fw-semibold">Reza Maulana</div>
                                            <div class="text-muted small">Pemilik Usaha</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="p-4 rounded bg-light">
                                    <p class="fs-5">“Setiap konten dokumentasi acara kami selalu memuaskan. Selalu
                                        profesional dan tepat waktu.”</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="Avatar"
                                            class="rounded-circle me-3" width="48" height="48">
                                        <div>
                                            <div class="fw-semibold">Bayu Nugroho</div>
                                            <div class="text-muted small">Event Organizer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- blog --}}
    <section class="py-5 bg-1">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-md-8 col sticky-mobile-fix position-sticky" style="top: 6rem; height: fit-content;">
                    <div id="artikelCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($artikels as $index => $artikel)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="ratio ratio-21x9">
                                        <img src="{{ asset('images/' . $artikel->gambar) }}"
                                            class="img-fluid object-fit-cover rounded" alt="{{ $artikel->judul }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <span class="badge text-bg-dark mt-3">Blog</span>
                    <h1 class="mb-3 mt-2 text-white">Fotografi dan videografi adalah seni mengabadikan momen berharga
                        yang tak terlupakan.</h1>
                    <p class="t">Temukan tips dan inspirasi untuk menghasilkan karya yang memukau di setiap
                        jepretan dan rekaman video!</p>
                </div>
                <div class="col-md-4 col scrollable-mobile-fix" style="overflow-y: auto;">
                    @foreach ($artikelTerbaru as $artikel)
                        <div class="card border-0 shadow-none">
                            <div class="card-body p-4">
                                <span class="badge text-bg-success">{{ $artikel->kategori }}</span>
                                <p class="text-muted mb-1 mt-2">
                                    <i
                                        class="bi bi-calendar me-2"></i>{{ \Carbon\Carbon::parse($artikel->created_at)->format('d F Y') }}
                                </p>
                                <a href="{{ route('detail.berita', ['kategori' => Str::slug($artikel->kategori), 'id' => $artikel->id, 'judul' => Str::slug($artikel->judul)]) }}"
                                    class="text-decoration-none text-dark card-title">{{ Str::limit($artikel->judul, 60) }}</a>
                            </div>
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('images/' . $artikel->gambar) }}" alt=""
                                    class="card-img-bottom object-fit-cover">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a href="/artikel" class="btn btn-light">Lainnya</a>
        </div>
    </section>

    {{-- kontak --}}

    {{-- call to action --}}
    <section class="py-5">
        <div class="container">
            <div class="card bg-body-secondary border-0 shadow-none">
                <div class="card-body">
                    <div class="text-center py-3">
                        <h1 class="fw-semibold">Siap mengabadikan momenmu? Hubungi kami sekarang!</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam laborum nisi tenetur!
                            Sapiente ullam
                            deserunt aspernatur architecto officiis vero dignissimos!</p>
                        <a href="/" class="btn btn-outline-dark">Hubungi kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-5">
        <x-footer-web></x-footer-web>
    </div>
</x-layout-web>
