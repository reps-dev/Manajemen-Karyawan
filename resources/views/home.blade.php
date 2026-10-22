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
                        </div>
                        <h3 class="mb-0">{{ $totalKaryawan }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Divisi Aktif</span>
                        </div>
                        <h3 class="mb-0">{{ $divisiAktif }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm stat-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Rata-rata Gaji</span>
                        </div>
                        <h3 class="mb-0">Rp {{ number_format((float) $rataRataGaji, 0, ',', '.') }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm mt-4">
    </div>
@endsection