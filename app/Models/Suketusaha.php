<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suketusaha extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tempat',
        'tgl_lahir',
        'pekerjaan',
        'rt',
        'rw',
        'desa',
        'dusun',
        'kecamatan',
        'no_kk',
        'kota',
        'nama_usaha',
        'alamat_usaha',
        'desa_usaha',
        'kecamatan_usaha',
        'bidang_usaha',
        'jenis_tempat',
        'status_tempat',
        'bentuk_usaha',
        'modal_usaha',
        'tenaga_kerja',
        'mulai_usaha',
        'status_surat', 
    ];
}
