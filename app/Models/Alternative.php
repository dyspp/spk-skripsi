<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $guarded = [];

    // A one-to-one relationship between Alternative and AlternativeScore.
    public function alternativeScore()
    {
        return $this->hasOne('App\Models\AlternativeScore');
    }
}
