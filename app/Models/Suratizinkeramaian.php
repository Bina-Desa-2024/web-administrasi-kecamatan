<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratizinkeramaian extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_surat',
        'nama',
        'nik',
        'jenis_kelamin',
        'pekerjaan',
        'agama',
        'alamat',
        'keterangan_keramaian',
        'dimulai_keramaian',
        'berakhir_keramaian',
        'lokasi_keramaian',
        'keterangan',
        'status_surat',
    ];    
}
