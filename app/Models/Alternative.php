<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $guarded = [];

    public function alternativeScore()
    {
        return $this->hasOne('App\Models\AlternativeScore');
    }
}
