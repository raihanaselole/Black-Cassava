<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'klinik_id',
        'nama',
        'status',
        'tanggal',
        'keluhan',
        'nik',
    ];

    // Relasi ke Klinik
    public function Klinik()
    {
        return $this->belongsTo(Klinik::class);
    }

    public function Antrian()
    {
        return $this->hasOne(Antrian::class);
    }
}
