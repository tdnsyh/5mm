<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-4">
                <a href="{{ route('pengguna.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="table-dark border-0">
                                <th class="rounded-start">Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="rounded-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="{{ route('pengguna.edit', $user->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout-admin>
