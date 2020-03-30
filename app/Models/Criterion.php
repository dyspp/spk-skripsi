<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
    protected $table = 'criteria';

    protected $fillable = ['name', 'attribute', 'weight'];

    // A one-to-many relationship between Criterion and CriterionScore.
    public function criterionScores()
    {
        return $this->hasMany('App\Models\CriterionScore');
    }
}
