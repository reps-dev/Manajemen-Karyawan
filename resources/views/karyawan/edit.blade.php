@extends('layouts.main')
@section('content')
    <h1>Edit Karyawan</h1>

    <div class="card shadow-sm border-0 mx-auto mb-3" style="max-width: 900px;">
        <div class="card-body bg-light">
            <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST" class="mt-3 mx-auto" style="max-width: 700px; width: 100%;">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ $karyawan->nip }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $karyawan->jabatan }}" required>
                </div>

                <div class="mb-3">
                    <label for="gaji" class="form-label">Gaji</label>
                    <input type="number" class="form-control" id="gaji" name="gaji" value="{{ $karyawan->gaji }}" required>
                </div>

                <div class="mb-3">
                    <label for="divisi" class="form-label">Divisi</label>
                    <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $karyawan->divisi }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
@endsection