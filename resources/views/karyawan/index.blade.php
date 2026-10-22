@extends('layouts.main')
@section('content')
    <h1>Daftar Karyawan</h1>

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>

        <form action="{{ route('karyawan.index') }}" method="GET" class="d-flex gap-2 align-items-center">
            <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Cari karyawan..." aria-label="Cari karyawan">
            <button type="submit" class="btn btn-outline-primary">Cari</button>
            @if (request('search'))
                <a href="{{ route('karyawan.index') }}" class="btn btn-outline-secondary">Reset</a>
            @endif
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