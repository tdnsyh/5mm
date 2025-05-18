<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-10">
                    <div class="card mb-0 border-0">
                        <div class="card-body p-0">
                            <div class="row row-cols-1 row-cols-md-2 g-0">
                                <div class="col">
                                    <img src="https://images.unsplash.com/photo-1460134846237-51c777df6111?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid h-100 object-fit-cover rounded mt-3 mt-md-0">
                                </div>
                                <div class="col p-md-5 p-4">
                                    <a href="/login" class="text-nowrap logo-img d-block py-3 w-100">
                                        <img src="{{ asset('/assets/images/logos/ddd.png') }}" width="100"
                                            alt="">
                                    </a>
                                    <h3 class="fw-semibold">Selamat datang kembali!</h3>
                                    <p>Masuk untuk mengelola dan menjelajahi event dengan lebih mudah.</p>
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3 mt-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Kata Sandi</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                                        <div class="mt-2">
                                            <p>
                                                Belum punya akun? <a href="{{ route('register') }}"
                                                    class="text-decoration-none">Daftar disini!</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-web>
