<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id',
        'klinik_id',
        'tanggal',
        'nomor',
    ];

    // Relasi ke Pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    // Relasi ke Klinik
    public function klinik()
    {
        return $this->belongsTo(Klinik::class);
    }

}
