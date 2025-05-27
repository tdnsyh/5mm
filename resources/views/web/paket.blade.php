<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>

    {{-- hero --}}
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="text-center">
                <span class="badge text-bg-dark mb-2">Paket</span>
                <h1 class="fw-bold">Paket yang kami sediakan</h1>
                <hr>
            </div>
            <!-- Nav Tabs -->
            <ul class="nav justify-content-center gap-2 mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-secondary active rounded px-4 py-2" id="home-tab"
                        data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                        aria-controls="home-tab-pane" aria-selected="true">Semua</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-dark rounded px-4 py-2" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                        aria-controls="profile-tab-pane" aria-selected="false">Foto</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-dark rounded px-4 py-2" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane" type="button" role="tab"
                        aria-controls="contact-tab-pane" aria-selected="false">Video</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-outline-warning rounded px-4 py-2" id="disabled-tab" data-bs-toggle="tab"
                        data-bs-target="#disabled-tab-pane" type="button" role="tab"
                        aria-controls="disabled-tab-pane" aria-selected="false">Foto & Video</button>
                </li>
            </ul>

            <div class="tab-content text-center" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="isi">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active text-start text-nowrap shadow-none" id="v-pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true">Semua</button>
                                <button class="nav-link text-start shadow-none text-nowrap" id="v-pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                    role="tab" aria-controls="v-pills-profile" aria-selected="false">Personal &
                                    Portrait</button>
                                <button class="nav-link text-start text-nowrap shadow-none" id="v-pills-disabled-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button"
                                    role="tab" aria-controls="v-pills-disabled" aria-selected="false">Prewedding &
                                    Engagement</button>
                                <button class="nav-link text-start text-nowrap shadow-none" id="v-pills-messages-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                    role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Messages</button>
                                <button class="nav-link text-start text-nowrap shadow-none" id="v-pills-settings-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
                                    role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Settings</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                    aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                    <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="isi">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active pe-5 text-start shadow-none" id="v-pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                    role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Profile</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-disabled-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button"
                                    role="tab" aria-controls="v-pills-disabled" aria-selected="false"
                                    disabled>Disabled</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-messages-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                    role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Messages</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-settings-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
                                    role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Settings</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="row row-cols-1 row-cols-md-4 justify-content-center">
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                    aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">
                    <div class="isi">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active pe-5 text-start shadow-none" id="v-pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                    role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Profile</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-disabled-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button"
                                    role="tab" aria-controls="v-pills-disabled" aria-selected="false"
                                    disabled>Disabled</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-messages-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                    role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Messages</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-settings-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
                                    role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Settings</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="row row-cols-1 row-cols-md-4 justify-content-center">
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                    aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                    tabindex="0">
                    <div class="isi">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active pe-5 text-start shadow-none" id="v-pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-profile-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                    role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Profile</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-disabled-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button"
                                    role="tab" aria-controls="v-pills-disabled" aria-selected="false"
                                    disabled>Disabled</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-messages-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                    role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Messages</button>
                                <button class="nav-link text-start pe-5 shadow-none" id="v-pills-settings-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
                                    role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Settings</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="row row-cols-1 row-cols-md-4 justify-content-center">
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="ratio ratio-4x3">
                                                    <img src="https://images.unsplash.com/photo-1529636798458-92182e662485?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        class="card-img-top object-fit-cover rounded" alt="...">
                                                </div>
                                                <div class="card-body">
                                                    <span class="badge text-bg-info mb-2 mt-0">Paket</span>
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to build on the card
                                                        title
                                                        and make up
                                                        the bulk of the card’s content.</p>
                                                    <h3 class="fw-semibold">Rp. 1.000.000</h3>
                                                    <a href="/paket/detail" class="btn btn-primary w-100">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                    aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer-web></x-footer-web>
</x-layout-web>
