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

    public function scopeFilterBy($query, $filter, $column)
    {
        $query->when($filter != null, function ($q) use ($filter, $column) {
            $values = explode(',', $filter);
            
            $q->where(function ($subQ) use ($values, $column) {
                for ($i = 0; $i < count($values); $i++)
                {
                    $subQ->orWhere($column, 'LIKE', '%'.$values[$i].'%');
                }

                return $subQ;
            });
            
            return $q;
        });
        
        return $query;
    }
}
