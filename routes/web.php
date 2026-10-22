<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/karyawan', \App\Http\Controllers\KaryawanController::class);
