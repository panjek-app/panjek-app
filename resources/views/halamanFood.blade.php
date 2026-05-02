@extends('layout')

@section('content')
<div class="text-center py-4">
    <h2 class="fw-bold text-dark">Pilihan <span class="text-primary">PAN-FOOD</span></h2>
    <p class="text-muted small">Nikmati hidangan terbaik dari mitra UMKM pilihan kami</p>
</div>

<div class="row">
    @foreach($stores as $store)
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
            <img src="{{ $store->image ?? 'https://via.placeholder.com/400x250?text=Foto+Makanan' }}" class="card-img-top" style="height: 200px; object-fit: cover;">
            
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h4 class="fw-bold text-dark mb-0">{{ $store->nama }}</h4>
                    <span class="fw-bold text-primary">Rp {{ $store->price ?? '15.000' }}</span>
                </div>
                
                <div class="mb-2">
                    <span class="text-warning small"><i class="fas fa-star me-1"></i>{{ $store->rating ?? '4.5' }}</span>
                    <span class="text-muted small ms-2">• Terjual 100+</span>
                </div>

                <p class="text-muted small mb-3">
                    <i class="fas fa-map-marker-alt text-danger me-1"></i> {{ $store->alamat }}
                </p>
                
                <a href="https://wa.me/6285782112342?text=Halo%20PANJEK,%20saya%20mau%20order%20{{ urlencode($store->nama) }}" 
                   class="btn btn-primary w-100 py-2 rounded-pill fw-bold shadow-sm" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>Pesan via WhatsApp
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


