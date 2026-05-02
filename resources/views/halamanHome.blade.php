@extends('layout')

@section('content')
<div class="row align-items-center py-5">
    <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-start">
        <h1 class="display-4 fw-bold text-dark mb-3">
            Solusi Pengiriman <span class="text-primary">UMKM Lokal</span> Terbaik.
        </h1>
        <p class="lead text-muted mb-4">
            PANJEK hadir untuk menghubungkan Anda dengan hidangan terbaik dari mitra UMKM pilihan dengan layanan pengantaran yang cepat dan terpercaya.
        </p>
        <div class="d-grid d-md-flex justify-content-center justify-content-lg-start gap-3">
            <a href="/food" class="btn btn-primary btn-lg px-5 rounded-pill fw-bold shadow">
                Mulai Pesan Sekarang
            </a>
            <a href="/company" class="btn btn-outline-dark btn-lg px-5 rounded-pill fw-bold">
                Tentang Kami
            </a>
        </div>
        
        <div class="row mt-5 pt-4 border-top">
            <div class="col-4">
                <h4 class="fw-bold text-dark mb-0">50+</h4>
                <p class="text-muted small">Mitra UMKM</p>
            </div>
            <div class="col-4">
                <h4 class="fw-bold text-dark mb-0">1K+</h4>
                <p class="text-muted small">Pesanan Selesai</p>
            </div>
            <div class="col-4">
                <h4 class="fw-bold text-dark mb-0">4.9</h4>
                <p class="text-muted small">Rating Driver</p>
            </div>
        </div>
    </div>

    <div class="col-lg-6 text-center">
        <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=2070&auto=format&fit=crop" 
                 class="img-fluid rounded-5 shadow-lg border border-5 border-white" 
                 style="max-height: 450px; width: 100%; object-fit: cover;" alt="Ilustrasi PANJEK">
            <div class="position-absolute bottom-0 start-0 bg-white p-3 shadow rounded-4 mb-n3 ms-n3 d-none d-md-block">
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-success rounded-circle p-2 text-white">
                        <i class="fas fa-check"></i>
                    </div>
                    <span class="fw-bold text-dark small">Mitra Terverifikasi</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 mt-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark">Kenapa Memilih <span class="text-primary">PANJEK</span>?</h2>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-center">
                <i class="fas fa-bolt text-warning fs-1 mb-3"></i>
                <h5 class="fw-bold">Pengiriman Cepat</h5>
                <p class="text-muted small">Driver kami siap mengantar pesanan Anda dalam waktu singkat.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-center">
                <i class="fas fa-shield-alt text-primary fs-1 mb-3"></i>
                <h5 class="fw-bold">Aman & Terpercaya</h5>
                <p class="text-muted small">Kami menjamin keamanan hidangan sampai ke depan pintu Anda.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 shadow-sm h-100 text-center">
                <i class="fas fa-handshake text-success fs-1 mb-3"></i>
                <h5 class="fw-bold">Dukung UMKM</h5>
                <p class="text-muted small">Setiap pesanan Anda membantu ekonomi pedagang lokal berkembang.</p>
            </div>
        </div>
    </div>
</div>
@endsection
