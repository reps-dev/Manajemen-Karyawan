<?php

use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $totalKaryawan = Karyawan::count();
    $divisiAktif = Karyawan::query()->whereNotNull('divisi')->where('divisi', '!=', '')->distinct('divisi')->count('divisi');
    $rataRataGaji = Karyawan::avg('gaji') ?? 0;

    return view('home', compact('totalKaryawan', 'divisiAktif', 'rataRataGaji'));
});

Route::resource('/karyawan', \App\Http\Controllers\KaryawanController::class);
