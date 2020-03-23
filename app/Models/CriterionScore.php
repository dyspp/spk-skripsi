<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriterionScore extends Model
{
    protected $table = 'criterion_scores';

    protected $fillable = ['criterion_id', 'description', 'score'];

    // Relationship (R)
    // R - One To Many with Criterion.
    public function criterion()
    {
        return $this->belongsTo('App\Models\Criterion');
    }

    // R - One To Many with Alternative Score (Processor Manufacturer).
    public function processorManufacturerOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_manufacturer');
    }

    // R - One To Many with Alternative Score (Processor Class).
    public function processorClassOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_class');
    }

    // R - One To Many with Alternative Score (Processor Base Speed).
    public function processorBaseSpeedOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_base_speed');
    }

    // R - One To Many with Alternative Score (Processor Core).
    public function processorCoreOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'processor_core');
    }

    // R - One To Many with Alternative Score (GPU Manufacturer).
    public function gpuManufacturerOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'gpu_manufacturer');
    }

    // R - One To Many with Alternative Score (GPU Class).
    public function gpuClassOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'gpu_class');
    }

    // R - One To Many with Alternative Score (GPU Memory).
    public function gpuMemoryOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'gpu_memory');
    }

    // R - One To Many with Alternative Score (Memory (RAM)).
    public function ramOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'ram');
    }

    // R - One To Many with Alternative Score (Storage Type).
    public function storageTypeOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'storage_type');
    }

    // R - One To Many with Alternative Score (Storage Size).
    public function storageSizeOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'storage_size');
    }

    // R - One To Many with Alternative Score (Price).
    public function priceOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'price');
    }

    // R - One To Many with Alternative Score (Display Size).
    public function displaySizeOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'display_size');
    }

    // R - One To Many with Alternative Score (Display Resolution).
    public function displayResolutionOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'display_resolution');
    }

    // R - One To Many with Alternative Score (Display Refresh Rate).
    public function displayRefreshRateOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'display_Refresh_rate');
    }

    // R - One To Many with Alternative Score (Brand).
    public function brandOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'brand');
    }

    // R - One To Many with Alternative Score (Unit Weight).
    public function unitWeightOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'unit_weight');
    }

    // R - One To Many with Alternative Score (Design).
    public function designOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'design');
    }

    // R - One To Many with Alternative Score (Feature).
    public function featureOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'feature');
    }

    // R - One To Many with Alternative Score (Backlit Keyboard).
    public function backlitKeyboardOnAlternativeScores() {
        return $this->hasMany('App\Models\AlternativeScore', 'backlit_keyboard');
    }

    // Query Scopes (QS)
    // QS - Total Criterion Scores for a specific Criterion.
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
