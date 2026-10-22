@extends('layouts.main')
@section('content')
    <h1>Daftar Karyawan</h1>
    @session('success')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endsession

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>

        <form action="{{ route('karyawan.index') }}" method="GET" class="d-flex gap-2 align-items-center flex-wrap">
            <input type="hidden" name="sort" value="{{ $sort ?? 'id_desc' }}">
            <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Cari karyawan..." aria-label="Cari karyawan">
            <button type="submit" class="btn btn-outline-primary">Cari</button>
            @if (request('search'))
                <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary">Reset</a>
            @endif
        </form>
    </div>

    <div class="mb-3 d-flex justify-content-end">
        <form action="{{ route('karyawan.index') }}" method="GET" class="d-flex align-items-center gap-2">
            @if (request('search'))
                <input type="hidden" name="search" value="{{ request('search') }}">
            @endif
            <label for="sort" class="form-label mb-0">Urutkan:</label>
            <select name="sort" id="sort" class="form-select" onchange="this.form.submit()">
                <option value="id_desc" {{ $sort === 'id_desc' ? 'selected' : '' }}>Terbaru</option>
                <option value="nama_asc" {{ $sort === 'nama_asc' ? 'selected' : '' }}>Nama A-Z</option>
                <option value="nama_desc" {{ $sort === 'nama_desc' ? 'selected' : '' }}>Nama Z-A</option>
                <option value="gaji_asc" {{ $sort === 'gaji_asc' ? 'selected' : '' }}>Gaji Terendah</option>
                <option value="gaji_desc" {{ $sort === 'gaji_desc' ? 'selected' : '' }}>Gaji Tertinggi</option>
                <option value="nip_asc" {{ $sort === 'nip_asc' ? 'selected' : '' }}>NIP A-Z</option>
                <option value="nip_desc" {{ $sort === 'nip_desc' ? 'selected' : '' }}>NIP Z-A</option>
            </select>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                    <th>Divisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawans as $karyawan)
                    <tr>
                        <td>{{ $karyawan->id }}</td>
                        <td>{{ $karyawan->nip}}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->jabatan }}</td>
                        <td>{{ $karyawan->gaji_rupiah }}</td>
                        <td>{{ $karyawan->divisi }}</td>
                        <td>
                            <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin mau hapus karyawan {{ addslashes($karyawan->nama) }}?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $karyawans->links() }}
    </div>
@endsection