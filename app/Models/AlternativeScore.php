<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternativeScore extends Model
{
    protected $table = 'alternative_scores';

    protected $guarded = [];

    // Always load all the relationships (Eager Load).
    protected $with = ['alternative', 'processorManufacturerScore', 'processorClassScore', 'processorBaseSpeedScore', 'processorCoreScore', 'gpuManufacturerScore', 'gpuClassScore', 'gpuMemoryScore', 'ramScore', 'storageTypeScore', 'storageSizeScore', 'priceScore', 'displaySizeScore', 'displayResolutionScore', 'displayRefreshRateScore', 'brandScore', 'unitWeightScore', 'designScore', 'featureScore', 'backlitKeyboardScore'];

    // Relationships (R)
    // R - An inverse one-to-one relationship between Alternative and AlternativeScore.
    public function alternative()
    {
        return $this->belongsTo('App\Models\Alternative');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Processor Manufacturer only).
    public function processorManufacturerScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_manufacturer');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Processor Class only).
    public function processorClassScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_class');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Processor Base Speed only).
    public function processorBaseSpeedScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_base_speed');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Processor Core only).
    public function processorCoreScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_core');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (GPU Manufacturer only).
    public function gpuManufacturerScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'gpu_manufacturer');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (GPU Class only).
    public function gpuClassScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'gpu_class');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (GPU Memory only).
    public function gpuMemoryScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'gpu_memory');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (RAM only).
    public function ramScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'ram');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Storage Type only).
    public function storageTypeScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'storage_type');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Storage Size only).
    public function storageSizeScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'storage_size');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Price only).
    public function priceScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'price');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Display Size only).
    public function displaySizeScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'display_size');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Display Resolution only).
    public function displayResolutionScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'display_resolution');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Display Refresh Rate only).
    public function displayRefreshRateScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'display_refresh_rate');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Brand only).
    public function brandScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'brand');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Unit Weight only).
    public function unitWeightScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'unit_weight');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Design only).
    public function designScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'design');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Feature only).
    public function featureScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'feature');
    }

    // R - An inverse one-to-many relationship between CriterionScore and AlternativeScore (Backlit Keyboard only).
    public function backlitKeyboardScore()
    {
        return $this->belongsTo('App\Models\CriterionScore', 'backlit_keyboard');
    }

    // Query Scopes
    /**
     * Query scope for using the user's preferences as the parameter for the SAW method calculation.
     * Parameters:
     * $value = the user's input (request), which contains the id for the specific criterion score.
     * $criterion = the criterion's name, which is the column's name on the alternative scores table.
     */
    public function scopeCalculateWith($query, $value, $criterion) {
        return $query->when($value != null, function($q) use ($value, $criterion) {
            return $q->where($criterion, $value);
        });
    }

    // Query Scope - Search
    public function scopeSearch($query, $keyword)
    {
        return $query->whereHas('alternative', function($searchQuery) use ($keyword) {
            $searchQuery->where('name', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('processorManufacturerScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('processorClassScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('processorBaseSpeedScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('processorCoreScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('gpuManufacturerScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('gpuClassScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('gpuMemoryScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('ramScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('storageTypeScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('storageSizeScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('priceScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('displaySizeScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('displayResolutionScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('displayRefreshRateScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('brandScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('unitWeightScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('designScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('featureScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orWhereHas('backlitKeyboardScore', function($searchQuery) use ($keyword) {
            $searchQuery->where('description', 'LIKE', '%'. $keyword .'%');
        })
        ->orderBy('id')->paginate(10);
    }
}
