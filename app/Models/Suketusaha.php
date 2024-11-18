<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suketusaha extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_surat',
        'nama',
        'tempat',
        'tgl_lahir',
        'pekerjaan',
        'alamat',
        'desa',
        'kecamatan',
        'kota',
        'nama_usaha',
        'alamat_usaha',
        'desa_usaha',
        'kecamatan_usaha',
        'jenis_tempat',
        'status_tempat',
        'bidang_usaha',
        'bentuk_usaha',
        'modal_usaha',
        'tenaga_kerja',
        'mulai_usaha',
        'status_surat',
    ];
}
