@extends('layout')

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-md-6">
        <div class="card shadow border-0 rounded-4">
            <div class="card-body p-5">
                <h3 class="fw-bold mb-4 text-center">Tambah Mitra <span class="text-primary">PANJEK</span></h3>
                <form action="/simpan-warung" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Warung</label>
                        <input type="text" name="nama" class="form-control rounded-pill" placeholder="Contoh: Ayam Bakar Nusantara" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control rounded-3" rows="3" placeholder="Contoh: Jl. Sudirman No. 10" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">Link Foto Makanan (URL)</label>
                        <input type="text" name="image" class="form-control rounded-pill" placeholder="https://link-foto.jpg">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-pill fw-bold shadow">
                        <i class="fas fa-plus-circle me-2"></i>Daftarkan Warung
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
