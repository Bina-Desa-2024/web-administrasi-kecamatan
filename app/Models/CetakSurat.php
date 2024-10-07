<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CetakSurat extends Model
{
    protected $table = 'cetak_surat';
    protected $guarded = [];

    public function surat()
    {
        return $this->belongsTo('App\Models\Surat');
    }

    public function detailCetak()
    {
        return $this->hasMany('App\Models\DetailCetak');
    }
}
