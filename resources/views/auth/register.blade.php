<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-10 py-3">
                    <div class="card mb-0 border-0">
                        <div class="card-body p-0">
                            <div class="row row-cols-1 row-cols-md-2 g-0">
                                <div class="col p-4 p-md-5">
                                    <a href="/register" class="text-nowrap logo-img d-block py-3 w-100">
                                        <img src="{{ asset('assets/images/logos/ddd.png') }}" width="100"
                                            alt="">
                                    </a>
                                    <h3 class="fw-semibold">Pertama kali di sini?</h3>
                                    <p>Daftar sekarang dan mulai ciptakan pengalaman event yang luar biasa.</p>
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Kata sandi</label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label">Konfirmasi
                                                        kata sandi</label>
                                                    <input type="password" class="form-control"
                                                        id="password_confirmation" name="password_confirmation"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="" disabled selected>Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success w-100">Register</button>
                                        <div class="mt-2">
                                            <p>
                                                Sudah punya akun? <a href="{{ route('login') }}"
                                                    class="text-decoration-none">Masuk disini!</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <div class="col d-none d-md-block">
                                    <img src="https://images.unsplash.com/photo-1488240339625-c4014e114224?q=80&w=1503&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="" class="img-fluid rounded h-100 object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-web>
