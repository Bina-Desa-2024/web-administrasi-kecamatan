<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'nama',
        'tempat',
        'tgl_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'agama',
        'jalan',
        'rt',
        'rw',
        'desa',
        'dusun',
        'kecamatan',
        'no_kk',
        'kota',
        'pend_terakhir',
        'pend_ditempuh',
        'status_perkawinan',
        'status_dalam_keluarga',
        'kewarganegaraan',
        'nama_ayah',
        'nama_ibu'
    ];
}
