<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    protected $table = "dusun";
    protected $guarded = [];

    public function detailDusun()
    {
        return $this->hasMany('App\Models\DetailDusun');
    }
}
