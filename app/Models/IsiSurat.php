<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IsiSurat extends Model
{
    protected $table = 'isi_surat';
    protected $guarded = [];

    public function surat()
    {
        return $this->belongsTo('App\Models\Surat', 'surat_id');
    }
}
