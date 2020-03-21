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

    // Query Scopes (QS)
    public function scopeTotal($query, $cScore)
    {
        return $query->with('criterion')->where('criterion_id', $cScore->criterion_id)->get();
    }

    // QS - Processor
    public function scopeProcessorManufacturer($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Manufacturer');
        })->get();
    }

    public function scopeProcessorClass($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Class');
        })->get();
    }

    public function scopeProcessorBaseSpeed($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Base Speed');
        })->get();
    }
    
    public function scopeProcessorCore($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Core');
        })->get();
    }
    
    // QS - GPU
    public function scopeGpuManufacturer($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'GPU Manufacturer');
        })->get();
    }
    
    public function scopeGpuClass($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'GPU Class');
        })->get();
    }
    
    public function scopeGpuMemory($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'GPU Memory');
        })->get();
    }
    
}
