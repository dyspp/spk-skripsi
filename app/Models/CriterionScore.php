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
    
    // QS - Memory (RAM)
    public function scopeRam($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Memory (RAM)');
        })->get();
    }

    // QS - Storage
    public function scopeStorageType($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Storage Type');
        })->get();
    }
    
    public function scopeStorageSize($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Storage Size');
        })->get();
    }

    // QS - Price
    public function scopePrice($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Price');
        })->get();
    }

    // QS - Display
    public function scopeDisplaySize($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Display Size');
        })->get();
    }

    public function scopeDisplayResolution($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Display Resolution');
        })->get();
    }

    public function scopeDisplayRefreshRate($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Display Refresh Rate');
        })->get();
    }

    // QS - Brand
    public function scopeBrand($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Brand');
        })->get();
    }

    // QS - Unit Weight
    public function scopeUnitWeight($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Unit Weight');
        })->get();
    }

    // QS - Design
    public function scopeDesign($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Design');
        })->get();
    }

    // QS - Feature
    public function scopeFeature($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Feature');
        })->get();
    }

    // QS - Backlit Keyboard
    public function scopeBacklitKeyboard($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Backlit Keyboard');
        })->get();
    }

}
