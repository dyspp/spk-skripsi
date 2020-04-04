<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlternativeScore;

class SAWMethodController extends Controller
{
    // A function to implement the Simple Additive Weighting (SAW) method.
    public function sawMethod()
    {
        $alternativeScores = AlternativeScore::all();

        // Step 1.
        // Get the actual criterion scores for each alternative score.
        foreach ($alternativeScores as $index => $alternativeScore)
        {
            $scores[$index] = [
                'alternative' => $alternativeScore->alternative->name,
                'processor_manufacturer' => $alternativeScore->processorManufacturerScore->score . '|' . $alternativeScore->processorManufacturerScore->criterion_attribute . '|' . $alternativeScore->processorManufacturerScore->criterion_weight,
                'processor_class' => $alternativeScore->processorClassScore->score . '|' . $alternativeScore->processorClassScore->criterion_attribute . '|' . $alternativeScore->processorClassScore->criterion_weight,
                'processor_base_speed' => $alternativeScore->processorBaseSpeedScore->score . '|' . $alternativeScore->processorBaseSpeedScore->criterion_attribute . '|' . $alternativeScore->processorBaseSpeedScore->criterion_weight,
                'processor_core' => $alternativeScore->processorcoreScore->score . '|' . $alternativeScore->processorcoreScore->criterion_attribute . '|' . $alternativeScore->processorcoreScore->criterion_weight,
                'gpu_manufacturer' => $alternativeScore->gpuManufacturerScore->score . '|' . $alternativeScore->gpuManufacturerScore->criterion_attribute . '|' . $alternativeScore->gpuManufacturerScore->criterion_weight,
                'gpu_class' => $alternativeScore->gpuClassScore->score . '|' . $alternativeScore->gpuClassScore->criterion_attribute . '|' . $alternativeScore->gpuClassScore->criterion_weight,
                'gpu_memory' => $alternativeScore->gpuMemoryScore->score . '|' . $alternativeScore->gpuMemoryScore->criterion_attribute . '|' . $alternativeScore->gpuMemoryScore->criterion_weight,
                'ram' => $alternativeScore->ramScore->score . '|' . $alternativeScore->ramScore->criterion_attribute . '|' . $alternativeScore->ramScore->criterion_weight,
                'storage_type' => $alternativeScore->storageTypeScore->score . '|' . $alternativeScore->storageTypeScore->criterion_attribute . '|' . $alternativeScore->storageTypeScore->criterion_weight,
                'storage_size' => $alternativeScore->storageSizeScore->score . '|' . $alternativeScore->storageSizeScore->criterion_attribute . '|' . $alternativeScore->storageSizeScore->criterion_weight,
                'price' => $alternativeScore->priceScore->score . '|' . $alternativeScore->priceScore->criterion_attribute . '|' . $alternativeScore->priceScore->criterion_weight,
                'display_size' => $alternativeScore->displaySizeScore->score . '|' . $alternativeScore->displaySizeScore->criterion_attribute . '|' . $alternativeScore->displaySizeScore->criterion_weight,
                'display_resolution' => $alternativeScore->displayResolutionScore->score . '|' . $alternativeScore->displayResolutionScore->criterion_attribute . '|' . $alternativeScore->displayResolutionScore->criterion_weight,
                'display_refresh_rate' => $alternativeScore->displayRefreshRateScore->score . '|' . $alternativeScore->displayRefreshRateScore->criterion_attribute . '|' . $alternativeScore->displayRefreshRateScore->criterion_weight,
                'brand' => $alternativeScore->brandScore->score . '|' . $alternativeScore->brandScore->criterion_attribute . '|' . $alternativeScore->brandScore->criterion_weight,
                'unit_weight' => $alternativeScore->unitWeightScore->score . '|' . $alternativeScore->unitWeightScore->criterion_attribute . '|' . $alternativeScore->unitWeightScore->criterion_weight,
                'design' => $alternativeScore->designScore->score . '|' . $alternativeScore->designScore->criterion_attribute . '|' . $alternativeScore->designScore->criterion_weight,
                'feature' => $alternativeScore->featureScore->score . '|' . $alternativeScore->featureScore->criterion_attribute . '|' . $alternativeScore->featureScore->criterion_weight,
                'backlit_keyboard' => $alternativeScore->backlitKeyboardScore->score . '|' . $alternativeScore->backlitKeyboardScore->criterion_attribute . '|' . $alternativeScore->backlitKeyboardScore->criterion_weight
            ];
        }
        // return $scores;

        // Step 2.
        // Get all criterion scores, then make an array for each criteron score.
        foreach ($scores as $index => $score)
        {
            $processorManufacturers[$index] = $this->extractInformations($score['processor_manufacturer'], 'score');
            $processorClasses[$index] = $this->extractInformations($score['processor_class'], 'score');
            $processorBaseSpeeds[$index] = $this->extractInformations($score['processor_base_speed'], 'score');
            $processorCores[$index] = $this->extractInformations($score['processor_core'], 'score');
            $gpuManufacturers[$index] = $this->extractInformations($score['gpu_manufacturer'], 'score');
            $gpuClasses[$index] = $this->extractInformations($score['gpu_class'], 'score');
            $gpuMemories[$index] = $this->extractInformations($score['gpu_memory'], 'score');
            $rams[$index] = $this->extractInformations($score['ram'], 'score');
            $storageTypes[$index] = $this->extractInformations($score['storage_type'], 'score');
            $storageSizes[$index] = $this->extractInformations($score['storage_size'], 'score');
            $prices[$index] = $this->extractInformations($score['price'], 'score');
            $displaySizes[$index] = $this->extractInformations($score['display_size'], 'score');
            $displayResolutions[$index] = $this->extractInformations($score['display_resolution'], 'score');
            $displayRefreshRates[$index] = $this->extractInformations($score['display_refresh_rate'], 'score');
            $brands[$index] = $this->extractInformations($score['brand'], 'score');
            $unitWeights[$index] = $this->extractInformations($score['unit_weight'], 'score');
            $designs[$index] = $this->extractInformations($score['design'], 'score');
            $features[$index] = $this->extractInformations($score['feature'], 'score');
            $backlitKeyboards[$index] = $this->extractInformations($score['backlit_keyboard'], 'score');
        }
        // return $backlitKeyboards;

        // Step 3.
        // Get the weight for each criterion score.
        foreach ($scores as $score)
        {
            $processorManufacturerWeight = $this->extractInformations($score['processor_manufacturer'], 'weight');
            $processorClassWeight = $this->extractInformations($score['processor_class'], 'weight');
            $processorBaseSpeedWeight = $this->extractInformations($score['processor_base_speed'], 'weight');
            $processorCoreWeight = $this->extractInformations($score['processor_core'], 'weight');
            $gpuManufacturerWeight = $this->extractInformations($score['gpu_manufacturer'], 'weight');
            $gpuClassWeight = $this->extractInformations($score['gpu_class'], 'weight');
            $gpuMemoryWeight = $this->extractInformations($score['gpu_memory'], 'weight');
            $ramWeight = $this->extractInformations($score['ram'], 'weight');
            $storageTypeWeight = $this->extractInformations($score['storage_type'], 'weight');
            $storageSizeWeight = $this->extractInformations($score['storage_size'], 'weight');
            $priceWeight = $this->extractInformations($score['price'], 'weight');
            $displaySizeWeight = $this->extractInformations($score['display_size'], 'weight');
            $displayResolutionWeight = $this->extractInformations($score['display_resolution'], 'weight');
            $displayRefreshRateWeight = $this->extractInformations($score['display_refresh_rate'], 'weight');
            $brandWeight = $this->extractInformations($score['brand'], 'weight');
            $unitWeightWeight = $this->extractInformations($score['unit_weight'], 'weight');
            $designWeight = $this->extractInformations($score['design'], 'weight');
            $featureWeight = $this->extractInformations($score['feature'], 'weight');
            $backlitKeyboardWeight = $this->extractInformations($score['backlit_keyboard'], 'weight');
        }
        // return $backlitKeyboardWeight;

        // Step 4.
        // Normalize all criterion scores for each alternative score.
        foreach ($scores as $index => $score)
        {
            $normalizedScores[$index] = [
                'alternative' => $score['alternative'],
                'processor_manufacturer_n' => $this->normalize($score['processor_manufacturer'], $processorManufacturers),
                'processor_class_n' => $this->normalize($score['processor_class'], $processorClasses),
                'processor_base_speed_n' => $this->normalize($score['processor_base_speed'], $processorBaseSpeeds),
                'processor_core_n' => $this->normalize($score['processor_core'], $processorCores),
                'gpu_manufacturer_n' => $this->normalize($score['gpu_manufacturer'], $gpuManufacturers),
                'gpu_class_n' => $this->normalize($score['gpu_class'], $gpuClasses),
                'gpu_memory_n' => $this->normalize($score['gpu_memory'], $gpuMemories),
                'ram_n' => $this->normalize($score['ram'], $rams),
                'storage_type_n' => $this->normalize($score['storage_type'], $storageTypes),
                'storage_size_n' => $this->normalize($score['storage_size'], $storageSizes),
                'price_n' => $this->normalize($score['price'], $prices),
                'display_size_n' => $this->normalize($score['display_size'], $displaySizes),
                'display_resolution_n' => $this->normalize($score['display_resolution'], $displayResolutions),
                'display_refresh_rate_n' => $this->normalize($score['display_refresh_rate'], $displayRefreshRates),
                'brand_n' => $this->normalize($score['brand'], $brands),
                'unit_weight_n' => $this->normalize($score['unit_weight'], $unitWeights),
                'design_n' => $this->normalize($score['design'], $designs),
                'feature_n' => $this->normalize($score['feature'], $features),
                'backlit_keyboard_n' => $this->normalize($score['backlit_keyboard'], $backlitKeyboards)
            ];
        }
        // return $normalizedScores;

        // Step 5.
        // Multiply each normalized criterion score with its weight.
        foreach ($normalizedScores as $index => $normalizedScore)
        {
            $finalizedScores[$index] = [
                'alternative' => $normalizedScore['alternative'],
                'processor_manufacturer_f' => $this->finalize($normalizedScore['processor_manufacturer_n'], $processorManufacturerWeight),
                'processor_class_f' => $this->finalize($normalizedScore['processor_class_n'], $processorClassWeight),
                'processor_base_speed_f' => $this->finalize($normalizedScore['processor_base_speed_n'], $processorBaseSpeedWeight),
                'processor_core_f' => $this->finalize($normalizedScore['processor_core_n'], $processorCoreWeight),
                'gpu_manufacturer_f' => $this->finalize($normalizedScore['gpu_manufacturer_n'], $gpuManufacturerWeight),
                'gpu_class_f' => $this->finalize($normalizedScore['gpu_class_n'], $gpuClassWeight),
                'gpu_memory_f' => $this->finalize($normalizedScore['gpu_memory_n'], $gpuMemoryWeight),
                'ram_f' => $this->finalize($normalizedScore['ram_n'], $ramWeight),
                'storage_type_f' => $this->finalize($normalizedScore['storage_type_n'], $storageTypeWeight),
                'storage_size_f' => $this->finalize($normalizedScore['storage_size_n'], $storageSizeWeight),
                'price_f' => $this->finalize($normalizedScore['price_n'], $priceWeight),
                'display_size_f' => $this->finalize($normalizedScore['display_size_n'], $displaySizeWeight),
                'display_resolution_f' => $this->finalize($normalizedScore['display_resolution_n'], $displayResolutionWeight),
                'display_refresh_rate_f' => $this->finalize($normalizedScore['display_refresh_rate_n'], $displayRefreshRateWeight),
                'brand_f' => $this->finalize($normalizedScore['brand_n'], $brandWeight),
                'unit_weight_f' => $this->finalize($normalizedScore['unit_weight_n'], $unitWeightWeight),
                'design_f' => $this->finalize($normalizedScore['design_n'], $designWeight),
                'feature_f' => $this->finalize($normalizedScore['feature_n'], $featureWeight),
                'backlit_keyboard_f' => $this->finalize($normalizedScore['backlit_keyboard_n'], $backlitKeyboardWeight)
            ];
        }
        // return $finalizedScores;

        // Step 6.
        // Count each alternative final score by sum all of their normalized criterion score, then rank the alternatives.
        foreach ($finalizedScores as $index => $finalizedScore)
        {
            $alternativeRanks[$index] = [
                'rank' => $index + 1,
                'alternative' => $finalizedScore['alternative'],
                'final_score' => $this->getFinalScore($finalizedScore)
            ];
        }

        // Make an array column for 'final_score' from $alternativeRanks array.
        $finalScore = array_column($alternativeRanks, 'final_score');

        // Sort the alternatives.
        array_multisort($finalScore, SORT_DESC, $alternativeRanks);
        $number = 1;
        return view('admin.test', compact('alternativeRanks', 'number'));
    }

    /**
     * Parameters: 
     * 1.   $data = an array whose informations will be extracted.
     * 2.   $param = a key to specify which information will be extracted form $data.
     *      $param can be either 'score' , 'attribute', or 'weight'.
     */
    public function extractInformations($data, $param)
    {
        $informations = explode('|', $data);

        if ($param == 'score')
        {
            $score = intval($informations[0]);

            return $score;
        }
        elseif ($param == 'attribute')
        {
            $attribute = intval($informations[1]);

            return $attribute;
        }
        elseif ($param == 'weight')
        {
            $weignt = floatval($informations[2]);

            return $weignt;
        }
    }

    /**
     * Parameters:
     * 1.   $alternativeScore = a specific criterion score from one alternative score.
     * 2.   $criterionScores = an array for the specific criterion score from Step 2.
     */
    public function normalize($alternativeScore, $criterionScores)
    {
        $score = $this->extractInformations($alternativeScore, 'score');
        $attribute = $this->extractInformations($alternativeScore, 'attribute');

        // 0 = cost, 1 = benefit
        if ($attribute == 0)
        {
            $normalizedScore = min($criterionScores) / $score;

            return $normalizedScore;
        }
        elseif ($attribute == 1)
        {
            $normalizedScore = $score / max($criterionScores);

            return $normalizedScore;
        }
    }

    /**
     * Parameters:
     * 1.   $normalizedCriterionScore = each normalized criterion score from one alternative score.
     * 2.   $weignt = the weight of each criterion score (from Step 3).
     */
    public function finalize($normalizedCriterionScore, $weignt)
    {
        $finalizedScore = $normalizedCriterionScore * $weignt;

        return $finalizedScore;
    }

    public function getFinalScore($array)
    {
        unset($array['alternative']);

        $finalScore = array_sum(array_values($array));

        return $finalScore;
    }
}
