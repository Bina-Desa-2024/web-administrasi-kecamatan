<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sukettidakmampu extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_surat',
        'nama',
        'tempat',
        'tgl_lahir',
        'pekerjaan',
        'nik',
        'alamat',
        'nama_tidak_mampu',
        'tempat_tidak_mampu',
        'tgl_lahir_tidak_mampu',
        'nik_tidak_mampu',
        'alamat_tidak_mampu',
        'keterangan',
        'status_surat',
    ];
}
