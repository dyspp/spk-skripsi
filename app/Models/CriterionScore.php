<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriterionScore extends Model
{
    protected $table = 'criterion_scores';

    protected $fillable = ['criterion_id', 'description', 'score'];

    // Relationship (R)
    // R - An inverse one-to-many relationship between Criterion and CriterionScore.
    public function criterion()
    {
        return $this->belongsTo('App\Models\Criterion');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Processor Manufacturer only).
    public function processorManufacturerOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_manufacturer');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Processor Class only).
    public function processorClassOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_class');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Processor Base Speed only).
    public function processorBaseSpeedOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_base_speed');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Processor Core only).
    public function processorCoreOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_core');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (GPU Manufacturer only).
    public function gpuManufacturerOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'gpu_manufacturer');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (GPU Class only).
    public function gpuClassOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'gpu_class');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (GPU Memory only).
    public function gpuMemoryOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'gpu_memory');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Ram only).
    public function ramOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'ram');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Storage Type only).
    public function storageTypeOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'storage_type');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Storage Size only).
    public function storageSizeOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'storage_size');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Price only).
    public function priceOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'price');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Display Size only).
    public function displaySizeOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'display_size');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Display Resolution only).
    public function displayResolutionOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'display_resolution');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Display Refresh Rate only).
    public function displayRefreshRateOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'display_Refresh_rate');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Brand only).
    public function brandOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'brand');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Unit Weight only).
    public function unitWeightOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'unit_weight');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Design only).
    public function designOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'design');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Feature only).
    public function featureOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'feature');
    }

    // R - A one-to-many relationship between CriterionScore and AlternativeScore (Backlit Keyboard only).
    public function backlitKeyboardOnAlternativeScores()
    {
        return $this->hasMany('App\Models\AlternativeScore', 'backlit_keyboard');
    }

    // Query Scopes (QS)
    // QS - Total Criterion Scores for a specific Criterion.
    public function scopeFromCriterion($query, $criterionScore)
    {
        return $query->with('criterion')->where('criterion_id', $criterionScore->criterion_id)->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Processor Manufacturer.
    public function scopeProcessorManufacturer($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Manufacturer');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Processor Class.
    public function scopeProcessorClass($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Class');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Processor Base Speed.
    public function scopeProcessorBaseSpeed($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Base Speed');
        })->get();
    }
    
    // QS - Group the Criterion Score where the Criterion name is Processor Score.
    public function scopeProcessorCore($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Processor Core');
        })->get();
    }
    
    // QS - Group the Criterion Score where the Criterion name is GPU Manufacturer.
    public function scopeGpuManufacturer($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'GPU Manufacturer');
        })->get();
    }
    
    // QS - Group the Criterion Score where the Criterion name is GPU Class
    public function scopeGpuClass($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'GPU Class');
        })->get();
    }
    
    // QS - Group the Criterion Score where the Criterion name is GPU Memory.
    public function scopeGpuMemory($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'GPU Memory');
        })->get();
    }
    
    // QS - Group the Criterion Score where the Criterion name is Memory (RAM).
    public function scopeRam($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Memory (RAM)');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Storage Type.
    public function scopeStorageType($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Storage Type');
        })->get();
    }
    
    // QS - Group the Criterion Score where the Criterion name is Storage Size.
    public function scopeStorageSize($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Storage Size');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Price.
    public function scopePrice($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Price');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Display Size.
    public function scopeDisplaySize($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Display Size');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Display Resolution.
    public function scopeDisplayResolution($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Display Resolution');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Display Refresh Rate.
    public function scopeDisplayRefreshRate($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Display Refresh Rate');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Brand.
    public function scopeBrand($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Brand');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Unit Weight
    public function scopeUnitWeight($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Unit Weight');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Design
    public function scopeDesign($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Design');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Feature
    public function scopeFeature($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Feature');
        })->get();
    }

    // QS - Group the Criterion Score where the Criterion name is Backlit Keyboard
    public function scopeBacklitKeyboard($query)
    {
        return $query->whereHas('criterion', function ($filter) {
            $filter->where('name', 'Backlit Keyboard');
        })->get();
    }

}
