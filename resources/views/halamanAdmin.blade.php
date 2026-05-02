@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center py-4">
    <h2 class="fw-bold">Panel <span class="text-primary">Admin PANJEK</span></h2>
    <a href="/tambah" class="btn btn-primary rounded-pill px-4 shadow-sm">
        <i class="fas fa-plus me-2"></i>Tambah Mitra Baru
    </a>
</div>

<div class="table-responsive bg-white p-4 rounded-4 shadow-sm">
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>Foto</th>
                <th>Nama Warung</th>
                <th>Alamat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr>
                <td>
                    <img src="{{ $store->image ?? 'https://via.placeholder.com/100' }}" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;">
                </td>
                <td class="fw-bold">{{ $store->nama }}</td>
                <td class="text-muted small">{{ $store->alamat }}</td>
                <td class="text-center">
                    <form action="/hapus-warung/{{ $store->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus mitra ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                            <i class="fas fa-trash me-1"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
