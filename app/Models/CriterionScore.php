<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriterionScore extends Model
{
    protected $table = 'criterion_scores';

    protected $fillable = ['criterion_id', 'description', 'score'];

    public function criterion()
    {
        return $this->belongsTo('App\Models\Criterion');
    }

    // Query Scopes
    public function scopeTotal($query, $cScore)
    {
        return $query->with('criterion')->where('criterion_id', $cScore->criterion_id)->get();
    }

    public function scopeBrand($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Brand');
        })->get();
    }

    public function scopePrice($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Price');
        })->get();
    }

    public function scopeProcessor($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor');
        })->get();
    }
}
