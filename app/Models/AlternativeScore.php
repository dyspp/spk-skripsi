<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternativeScore extends Model
{
    protected $table = 'alternative_scores';

    protected $guarded = [];

    public function alternative()
    {
        return $this->belongsTo('App\Models\Alternative');
    }
}
