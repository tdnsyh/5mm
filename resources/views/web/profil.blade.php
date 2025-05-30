<x-layout-web>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar-web></x-navbar-web>
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="mb-4">
                <span class="badge text-bg-dark mb-2">Akun</span>
                <h1>Profil {{ $user->name }}</h1>
                <hr>
            </div>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST">
                @csrf

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email (tidak bisa diubah)</label>
                            <input type="email" value="{{ $user->email }}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" name="telepon" value="{{ old('telepon', $userData->telepon ?? '') }}"
                                class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $userData->alamat ?? '') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <x-footer-web></x-footer-web>
</x-layout-web>
