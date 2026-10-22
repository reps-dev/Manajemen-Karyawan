<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    /** @use HasFactory<\Database\Factories\KaryawanFactory> */
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'divisi',
        'gaji',
        'tanggal_masuk',
        'keterangan',
    ];

    protected $casts = [
        'gaji' => 'decimal:2',
        'tanggal_masuk' => 'date',
    ];

    public function getGajiRupiahAttribute(): string
    {
        return 'Rp ' . number_format((float) $this->gaji, 0, ',', '.');
    }

    public function setGajiAttribute($value): void
    {
        $this->attributes['gaji'] = is_null($value)
            ? null
            : (int) preg_replace('/[^0-9]/', '', (string) $value);
    }
}
