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
                        <select name="type" class="form-control" required>
                            <option value="">Pilih Type</option>
                            <option value="foto" {{ old('type', $paket->type ?? '') == 'foto' ? 'selected' : '' }}>
                                Foto</option>
                            <option value="video" {{ old('type', $paket->type ?? '') == 'video' ? 'selected' : '' }}>
                                Video</option>
                            <option value="combo" {{ old('type', $paket->type ?? '') == 'combo' ? 'selected' : '' }}>
                                Combo (Foto & Video)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            <option value="wedding"
                                {{ old('kategori', $paket->kategori ?? '') == 'wedding' ? 'selected' : '' }}>Wedding
                            </option>
                            <option value="prewedding"
                                {{ old('kategori', $paket->kategori ?? '') == 'prewedding' ? 'selected' : '' }}>
                                Prewedding</option>
                            <option value="engagement"
                                {{ old('kategori', $paket->kategori ?? '') == 'engagement' ? 'selected' : '' }}>
                                Engagement</option>
                            <option value="maternity"
                                {{ old('kategori', $paket->kategori ?? '') == 'maternity' ? 'selected' : '' }}>Maternity
                            </option>
                            <option value="newborn"
                                {{ old('kategori', $paket->kategori ?? '') == 'newborn' ? 'selected' : '' }}>Newborn
                            </option>
                            <option value="family"
                                {{ old('kategori', $paket->kategori ?? '') == 'family' ? 'selected' : '' }}>Family
                            </option>
                            <option value="graduation"
                                {{ old('kategori', $paket->kategori ?? '') == 'graduation' ? 'selected' : '' }}>
                                Graduation</option>
                            <option value="event"
                                {{ old('kategori', $paket->kategori ?? '') == 'event' ? 'selected' : '' }}>Event
                            </option>
                            <option value="produk"
                                {{ old('kategori', $paket->kategori ?? '') == 'produk' ? 'selected' : '' }}>Produk
                            </option>
                            <option value="corporate"
                                {{ old('kategori', $paket->kategori ?? '') == 'corporate' ? 'selected' : '' }}>
                                Corporate</option>
                            <option value="profile"
                                {{ old('kategori', $paket->kategori ?? '') == 'profile' ? 'selected' : '' }}>
                                Personal/Company Profile</option>
                            <option value="fashion"
                                {{ old('kategori', $paket->kategori ?? '') == 'fashion' ? 'selected' : '' }}>Fashion
                            </option>
                            <option value="travel"
                                {{ old('kategori', $paket->kategori ?? '') == 'travel' ? 'selected' : '' }}>Travel
                            </option>
                            <option value="dokumentasi"
                                {{ old('kategori', $paket->kategori ?? '') == 'dokumentasi' ? 'selected' : '' }}>
                                Dokumentasi</option>
                        </select>
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

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control"
                            value="{{ old('harga', $paket->harga ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Foto (boleh lebih dari satu)</label>
                        <input type="file" name="fotos[]" class="form-control" id="fotoInput" multiple
                            accept="image/*">
                    </div>

                    <div id="previewContainer" class="d-flex flex-wrap gap-2 mt-2"></div>

                    @if (isset($paket))
                        <div class="mb-3">
                            <label class="form-label">Foto Saat Ini:</label><br>
                            @foreach ($paket->fotos as $foto)
                                <img src="{{ asset('storage/' . $foto->path) }}" class="me-2 mb-2"
                                    style="width: 100px;">
                            @endforeach
                        </div>
                    @endif

                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('paket.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
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
    <script>
        const fotoInput = document.getElementById('fotoInput');
        const previewContainer = document.getElementById('previewContainer');

        fotoInput.addEventListener('change', function() {
            previewContainer.innerHTML = '';

            Array.from(this.files).forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const wrapper = document.createElement('div');
                        wrapper.style.position = 'relative';
                        wrapper.style.display = 'inline-block';

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.height = '150px';
                        img.style.objectFit = 'cover';
                        img.style.marginRight = '10px';

                        const removeBtn = document.createElement('button');
                        removeBtn.innerHTML = '&times;';
                        removeBtn.type = 'button';
                        removeBtn.style.position = 'absolute';
                        removeBtn.style.top = '-5px';
                        removeBtn.style.right = '-5px';
                        removeBtn.style.background = 'red';
                        removeBtn.style.color = 'white';
                        removeBtn.style.border = 'none';
                        removeBtn.style.borderRadius = '50%';
                        removeBtn.style.width = '24px';
                        removeBtn.style.height = '24px';
                        removeBtn.style.cursor = 'pointer';
                        removeBtn.title = 'Hapus foto ini';

                        removeBtn.addEventListener('click', () => {
                            wrapper.remove();
                            const dataTransfer = new DataTransfer();
                            Array.from(fotoInput.files).forEach((f, i) => {
                                if (i !== index) dataTransfer.items.add(f);
                            });
                            fotoInput.files = dataTransfer.files;
                        });

                        wrapper.appendChild(img);
                        wrapper.appendChild(removeBtn);
                        previewContainer.appendChild(wrapper);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</x-layout-admin>
