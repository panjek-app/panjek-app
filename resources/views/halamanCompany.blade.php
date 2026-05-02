@extends('layout')

@section('content')
<div class="py-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <h1 class="fw-bold text-dark display-5 mb-4">Misi Kami: <span class="text-primary">Memberdayakan UMKM</span></h1>
            <p class="lead text-muted">PANJEK bukan sekadar aplikasi pengantaran. Kami adalah jembatan digital bagi pedagang lokal untuk menjangkau pelanggan lebih luas dengan teknologi yang simpel dan efisien.</p>
        </div>
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop" class="img-fluid rounded-5 shadow" alt="Tim PANJEK">
        </div>
    </div>

    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="p-4 border-0 shadow-sm rounded-4 bg-white h-100">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fas fa-heart fa-lg"></i>
                </div>
                <h4 class="fw-bold">Penuh Cinta</h4>
                <p class="text-muted small">Setiap layanan kami dedikasikan untuk membantu pertumbuhan ekonomi rakyat.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border-0 shadow-sm rounded-4 bg-white h-100">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fas fa-rocket fa-lg"></i>
                </div>
                <h4 class="fw-bold">Inovasi Cepat</h4>
                <p class="text-muted small">Terus berkembang memberikan fitur terbaik bagi mitra dan pengguna.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border-0 shadow-sm rounded-4 bg-white h-100">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fas fa-users fa-lg"></i>
                </div>
                <h4 class="fw-bold">Komunitas Kuat</h4>
                <p class="text-muted small">Membangun ekosistem yang saling menguntungkan antara driver, mitra, dan pembeli.</p>
            </div>
        </div>
    </div>
</div>
@endsection
