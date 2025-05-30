 <x-layout-web>
     <x-slot:title>{{ $title }}</x-slot:title>
     <x-navbar-web></x-navbar-web>
     <section class="py-3 py-md-5">
         <div class="container">
             <div class="card mb-4 border shadow-none">
                 <div class="card-body">
                     <h5 class="card-title">{{ $reservasi->paket->nama }}</h5>
                     <p>{{ $reservasi->paket->type }} - {{ $reservasi->paket->kategori }}</p>
                     <p><strong>Tanggal Reservasi:</strong> {{ $reservasi->tanggal_reservasi }}</p>
                     <p><strong>Alamat:</strong> {{ $reservasi->alamat }}</p>
                 </div>
             </div>

             <form action="{{ route('testimoni.store', $reservasi->id) }}" method="POST">
                 @csrf
                 <div class="mb-3">
                     <label for="rating" class="form-label">Rating (1-5)</label>
                     <input type="number" name="rating" id="rating" class="form-control" min="1"
                         max="5" required>
                 </div>
                 <div class="mb-3">
                     <label for="pesan" class="form-label">Pesan</label>
                     <textarea name="pesan" id="pesan" class="form-control" rows="4" required></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
                 <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
             </form>
         </div>
     </section>
     <x-footer-web></x-footer-web>
 </x-layout-web>
