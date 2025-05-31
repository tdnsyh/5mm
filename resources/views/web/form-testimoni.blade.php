 <x-layout-web>
     <x-slot:title>{{ $title }}</x-slot:title>
     <x-navbar-web></x-navbar-web>
     <section class="py-3 py-md-5">
         <div class="container">
             <div class="mb-4">
                 <span class="badge text-bg-dark mb-2">Testimoni</span>
                 <h1>{{ $title }}</h1>
                 <hr>
             </div>
             <div class="row row-cols-1 row-cols-md-2 g-4">
                 <div class="col">
                     <div class="card mb-4 border shadow-none">
                         <div class="card-body">
                             <h5 class="card-title">{{ $reservasi->paket->nama }}</h5>
                             <p>{{ $reservasi->paket->type }} - {{ $reservasi->paket->kategori }}</p>
                             <p><strong>Tanggal Reservasi:</strong> {{ $reservasi->tanggal_reservasi }}</p>
                             <p><strong>Alamat:</strong> {{ $reservasi->alamat }}</p>
                         </div>
                     </div>
                 </div>
                 <div class="col">
                     <form action="{{ route('user.testimoni.store', $reservasi->id) }}" method="POST">
                         @csrf
                         <div class="mb-3">
                             <label class="form-label">Rating (1-5)</label><br>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="rating" id="rating1"
                                     value="1" required>
                                 <label class="form-check-label" for="rating1">1</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="rating" id="rating2"
                                     value="2">
                                 <label class="form-check-label" for="rating2">2</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="rating" id="rating3"
                                     value="3">
                                 <label class="form-check-label" for="rating3">3</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="rating" id="rating4"
                                     value="4">
                                 <label class="form-check-label" for="rating4">4</label>
                             </div>
                             <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="rating" id="rating5"
                                     value="5">
                                 <label class="form-check-label" for="rating5">5</label>
                             </div>
                         </div>
                         <div class="mb-3">
                             <label for="pesan" class="form-label">Pesan</label>
                             <textarea name="pesan" id="pesan" class="form-control" rows="4" required></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
                         <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                     </form>
                 </div>
             </div>
         </div>
     </section>
     <x-footer-web></x-footer-web>
 </x-layout-web>
