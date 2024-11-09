<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sukettidakmampu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tempat',
        'tgl_lahir',
        'pekerjaan',
        'nik',
        'rt',
        'rw',
        'desa',
        'dusun',
        'kecamatan',
        'kota',
        'nama_tidak_mampu',
        'tempat_tidak_mampu',
        'tgl_lahir_tidak_mampu',
        'nik_tidak_mampu',
        'rt_tidak_mampu',
        'rw_tidak_mampu',
        'desa_tidak_mampu',
        'dusun_tidak_mampu',
        'kecamatan_tidak_mampu',
        'kota_tidak_mampu',
        'status_surat'
    ];
}
