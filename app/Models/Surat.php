<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $guarded = [];

    public function isiSurat()
    {
        return $this->hasMany('App\Models\IsiSurat', 'surat_id');
    }

    public function cetakSurat()
    {
        return $this->hasMany('App\Models\CetakSurat', 'surat_id');
    }
}
