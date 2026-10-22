@extends('layouts.main')
@section('content')
    <div class="home-page">
        <div class="card border-0 shadow-sm hero-banner mb-4">
            <div class="card-body p-4 p-lg-5">
                <h1 class="display-5 fw-bold mb-3">Selamat Datang di Aplikasi Manajemen Karyawan</h1>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Lihat Data</a>
                    <a href="{{ route('karyawan.create') }}" class="btn btn-outline-primary">Tambah Karyawan</a>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Total Karyawan</span>
                            <span class="badge text-bg-primary">Live</span>
                        </div>
                        <h3 class="mb-0">120</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Divisi Aktif</span>
                            <span class="badge text-bg-success">Ready</span>
                        </div>
                        <h3 class="mb-0">8</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Rata-rata Gaji</span>
                            <span class="badge text-bg-warning">Update</span>
                        </div>
                        <h3 class="mb-0">Rp 7.5Jt</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm mt-4">
            <div class="card-body">
                <h2 class="h4 mb-3">Fitur Utama</h2>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <h3 class="h5">Manajemen Data</h3>
                            <p class="mb-0 text-secondary">Tambah, edit, dan hapus data karyawan dengan proses yang cepat dan aman.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <h3 class="h5">Pencarian Cepat</h3>
                            <p class="mb-0 text-secondary">Temukan karyawan berdasarkan nama atau NIP tanpa harus membuka seluruh daftar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection