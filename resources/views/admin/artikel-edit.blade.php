<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        value="{{ $artikel->judul }}" required>
                </div>

                <div class="mb-3">
                    <label for="isi_berita" class="form-label">Isi Berita</label>
                    <div id="isi_berita" name="isi_berita">{!! $artikel->isi_berita !!}</div>
                    <input type="hidden" id="hidden-isi_berita" name="isi_berita" required>
                </div>

                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis"
                        value="{{ $artikel->penulis }}" required>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="Pertanian" {{ $artikel->kategori == 'Fotografi' ? 'selected' : '' }}>
                            Fotografi
                        </option>
                        <option value="Ketahanan Pangan" {{ $artikel->kategori == 'Videografi' ? 'selected' : '' }}>
                            Videografi
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    @if ($artikel->gambar)
                        <img src="{{ asset('images/' . $artikel->gambar) }}" alt="gambar" class="img-fluid mt-2"
                            style="max-width: 150px;">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
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
            $summer('#isi_berita').summernote({
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
                var isiBerita = $summer('#isi_berita').summernote('code');

                if ($summer('#hidden-isi_berita').length === 0) {
                    $summer('<input>').attr({
                        type: 'hidden',
                        id: 'hidden-isi_berita',
                        name: 'isi_berita',
                        value: isiBerita
                    }).appendTo('form');
                } else {
                    $summer('#hidden-isi_berita').val(isiBerita);
                }
            });
        });
    </script>
</x-layout-admin>
