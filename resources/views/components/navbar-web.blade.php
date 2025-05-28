<div class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">5MM</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto align-items-lg-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}"
                            href="{{ url('/tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('paket') ? 'active' : '' }}"
                            href="{{ url('/paket') }}">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('portofolio') ? 'active' : '' }}"
                            href="{{ url('/portofolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}"
                            href="{{ url('/artikel') }}">Artikel</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    @guest
                        {{-- <li class="nav-item">
                            <a class="btn btn-outline-dark ms-md-2" href="{{ url('/register') }}">Daftar</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="btn btn-dark bg-1 ms-md-2 text-white" href="{{ url('/login') }}">Masuk</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link p-0" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="Profile" width="35"
                                    height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    @if (Auth::user()->role === 'admin')
                                        <a href="{{ route('admin.dashboard.index') }}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-layout-dashboard fs-6"></i>
                                            <p class="mb-0 fs-3">Dashboard</p>
                                        </a>
                                    @elseif(Auth::user()->role === 'user')
                                        <a href="/profil" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">Profil</p>
                                        </a>
                                        <a href="/keranjang" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-shopping-cart fs-6"></i>
                                            <p class="mb-0 fs-3">Keranjang</p>
                                        </a>
                                        <a href="/pesanan" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-package fs-6"></i>
                                            <p class="mb-0 fs-3">Pesanan Saya</p>
                                        </a>
                                    @endif
                                    <a href="{{ route('logout') }}" class="btn btn-outline-danger mx-3 mt-2 d-block"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
