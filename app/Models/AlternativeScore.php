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

    public function processorManufacturerScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_manufacturer');
    }

    public function processorClassScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_class');
    }

    public function processorBaseSpeedScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_base_speed');
    }

    public function processorCoreScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'processor_core');
    }

    public function gpuManufacturerScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'gpu_manufacturer');
    }

    public function gpuClassScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'gpu_class');
    }

    public function gpuMemoryScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'gpu_memory');
    }

    public function ramScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'ram');
    }

    public function storageTypeScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'storage_type');
    }

    public function storageSizeScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'storage_size');
    }

    public function priceScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'price');
    }

    public function displaySizeScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'display_size');
    }

    public function displayResolutionScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'display_resolution');
    }

    public function displayRefreshRateScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'display_refresh_rate');
    }

    public function brandScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'brand');
    }

    public function unitWeightScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'unit_weight');
    }

    public function designScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'design');
    }

    public function featureScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'feature');
    }

    public function backlitKeyboardScore() {
        return $this->belongsTo('App\Models\CriterionScore', 'backlit_keyboard');
    }

}
