<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ isset($paket) ? 'Edit Paket' : 'Tambah Paket' }}</h3>
            <div class="mt-3">
                <form method="POST" enctype="multipart/form-data"
                    action="{{ isset($paket) ? route('paket.update', $paket) : route('paket.store') }}">
                    @csrf
                    @if (isset($paket))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control"
                            value="{{ old('type', $paket->type ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control"
                            value="{{ old('kategori', $paket->kategori ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control"
                            value="{{ old('nama', $paket->nama ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <div id="deskripsi" name="deskripsi">{{ old('deskripsi', $paket->deskripsi ?? '') }}</div>
                        <input type="hidden" id="hidden-deskripsi" name="deskripsi" required>
                    </div>
                    {{--
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $paket->deskripsi ?? '') }}</textarea>
                    </div> --}}

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control"
                            value="{{ old('harga', $paket->harga ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Foto (boleh lebih dari satu)</label>
                        <input type="file" name="fotos[]" class="form-control" multiple>
                    </div>

                    @if (isset($paket))
                        <div class="mb-3">
                            <label class="form-label">Foto Saat Ini:</label><br>
                            @foreach ($paket->fotos as $foto)
                                <img src="{{ asset('storage/' . $foto->path) }}" class="me-2 mb-2"
                                    style="width: 100px;">
                            @endforeach
                        </div>
                    @endif

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('paket.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script>
        var $summer = jQuery.noConflict(true);

        $summer(document).ready(function() {
            $summer('#deskripsi').summernote({
                placeholder: 'Tulis berita Anda di sini...',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            $summer('form').on('submit', function(e) {
                var isiBerita = $summer('#deskripsi').summernote('code');

                if ($summer('#hidden-deskripsi').length === 0) {
                    $summer('<input>').attr({
                        type: 'hidden',
                        id: 'hidden-deskripsi',
                        name: 'deskripsi',
                        value: isiBerita
                    }).appendTo('form');
                } else {
                    $summer('#hidden-deskripsi').val(isiBerita);
                }
            });
        });
    </script>
</x-layout-admin>
