<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_klinik',
        'alamat',
        'no_telp',
        'email',
    ];

    public function pasiens()
    {
        return $this->hasMany(Pasien::class);
    }

}
