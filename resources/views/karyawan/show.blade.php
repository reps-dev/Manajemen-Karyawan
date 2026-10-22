@extends('layouts.main')
@section('content')
    <h1>Detail Karyawan</h1>
    <div class="card mb-3 d-flex justify-content-center align-items-center" style="max-width: 100%; max-height: 100%; ">
        <div class="card-body" style="background-color: #f8f9fa; display: flex; flex-direction: column; align-items: right; justify-content: center;">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Profile Picture" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h5 class="card-title"><strong>Nama :</strong> {{ $karyawan->nama }}</h5>
            <p class="card-text"><strong>NIP:</strong> {{ $karyawan->nip }}</p>
            <p class="card-text"><strong>Jabatan:</strong> {{ $karyawan->jabatan }}</p>
            <p class="card-text"><strong>Gaji:</strong> {{ $karyawan->gaji_rupiah }}</p>
            <p class="card-text"><strong>Divisi:</strong> {{ $karyawan->divisi }}</p>
            <p class="card-text"><strong>Keterangan:</strong> {{ $karyawan->keterangan }}</p>
            <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
