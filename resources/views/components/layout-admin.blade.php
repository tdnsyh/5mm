<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? '-' }} - 5mm</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <main>
            <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
                data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
                <aside class="left-sidebar no-print">
                    <div>
                        <div class="brand-logo d-flex align-items-center justify-content-between">
                            <a href="/admin/dashboard" class="text-nowrap logo-img">
                                <img src="{{ asset('assets/images/logos/ddd.png') }}" style="margin-top: 30px"
                                    width="120" alt="Logo" />
                            </a>
                            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                                <i class="ti ti-x fs-8"></i>
                            </div>
                        </div>
                        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                            <ul id="sidebarnav">
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Home</span>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/dashboard*')) active @endif"
                                        href="/admin/dashboard">
                                        <span><i class="ti ti-layout-dashboard"></i></span>
                                        <span class="hide-menu">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Pemesanan</span>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/jadwal*')) active @endif"
                                        href="/admin/jadwal">
                                        <span><i class="ti ti-calendar"></i></span>
                                        <span class="hide-menu">Jadwal</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/pesanan*')) active @endif"
                                        href="/admin/pesanan">
                                        <span><i class="ti ti-truck-loading"></i></span>
                                        <span class="hide-menu">Pesanan</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/pembayaran*')) active @endif"
                                        href="/admin/pembayaran">
                                        <span><i class="ti ti-wallet"></i></span>
                                        <span class="hide-menu">Pembayaran</span>
                                    </a>
                                </li>
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Konten</span>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/paket*')) active @endif"
                                        href="/admin/paket">
                                        <span><i class="ti ti-photo"></i></span>
                                        <span class="hide-menu">Paket</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/artikel*')) active @endif"
                                        href="/admin/artikel">
                                        <span><i class="ti ti-article"></i></span>
                                        <span class="hide-menu">Artikel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/portofolio*')) active @endif"
                                        href="/admin/portofolio">
                                        <span><i class="ti ti-photo"></i></span>
                                        <span class="hide-menu">Portofolio</span>
                                    </a>
                                </li>
                                <li class="nav-small-cap">
                                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                    <span class="hide-menu">Manajemen</span>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/pengguna*')) active @endif"
                                        href="/admin/pengguna">
                                        <span><i class="ti ti-users"></i></span>
                                        <span class="hide-menu">Pengguna</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link @if (request()->is('admin/laporan*')) active @endif"
                                        href="/admin/laporan">
                                        <span><i class="ti ti-report"></i></span>
                                        <span class="hide-menu">Laporan</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
                <div class="body-wrapper">
                    <header class="app-header">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item d-block d-xl-none">
                                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                        href="javascript:void(0)">
                                        <i class="ti ti-menu-2"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                        <i class="ti ti-bell-ringing"></i>
                                        <div class="notification bg-primary rounded-circle"></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ '/assets/images/profile/user-1.jpg' }}" alt=""
                                                width="35" height="35" class="rounded-circle">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop2">
                                            <div class="message-body">
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 dropdown-item">
                                                    <i class="ti ti-user fs-6"></i>
                                                    <p class="mb-0 fs-3">My Profile</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 dropdown-item">
                                                    <i class="ti ti-mail fs-6"></i>
                                                    <p class="mb-0 fs-3">My Account</p>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 dropdown-item">
                                                    <i class="ti ti-list-check fs-6"></i>
                                                    <p class="mb-0 fs-3">My Task</p>
                                                </a>
                                                <a href="{{ route('logout') }}"
                                                    class="btn btn-outline-danger mx-3 mt-2 d-block"
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
                                </ul>
                            </div>
                        </nav>
                    </header>
                    <div class="container-fluid">
                        <div class="isi">
                            {{ $slot }}
                        </div>
                        <div class="footer clearfix mb-0 text-muted">
                            <div class="float-start">
                                <p>2025 &copy; Codemalaya</p>
                            </div>
                            <div class="float-end">
                                <p>Crafted with <span class="text-danger"><i
                                            class="bi bi-heart-fill icon-mid"></i></span>
                                    by <a href="#" class="text-decoration-none">Chrnssa</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @if (session('success'))
        <div class="alert ee alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-4"
            role="alert" style="z-index: 9999;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert ee alert-danger alert-dismissible fade show position-fixed bottom-0 end-0 m-4"
            role="alert" style="z-index: 9999;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <script>
        setTimeout(() => {
            const alert = bootstrap.Alert.getOrCreateInstance(document.querySelector('.ee'));
            alert.close();
        }, 5000); // 5 detik
    </script>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>
