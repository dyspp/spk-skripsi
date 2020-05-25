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

    /**
     * Query scope for filtering on the catalog page.
     * Parameters:
     * $filter = the keyword for filtering.
     * $column = column's name on the database.
     */
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

    // Query Scope : Search
    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('brand', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('price', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('processor', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('gpu', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('ram', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('storage', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('display', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('unit_weight', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('connectivity', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('ports', 'LIKE', '%'. $keyword .'%')
                    ->orWhere('features', 'LIKE', '%'. $keyword .'%')
                    ->orderBy('id')->paginate(25);
    }
}
