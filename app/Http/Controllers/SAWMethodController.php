<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlternativeScore;

class SAWMethodController extends Controller
{
    // A function to implement the Simple Additive Weighting (SAW) method.
    public function sawMethod(Request $request)
    {
        // dd($request->all());
        if ($request->price || $request->processorClass || $request->ram || $request->gpuClass || $request->storageType)
        {
            $query = AlternativeScore::query();

            $query->when(request('price') != null, function ($q) {
                return $q->where('price', request('price'));
            });

            $query->when(request('processorClass') != null, function ($q) {
                return $q->where('processor_class', request('processorClass'));
            });

            $query->when(request('ram') != null, function ($q) {
                return $q->where('ram', request('ram'));
            });

            $query->when(request('gpuClass') != null, function ($q) {
                return $q->where('gpu_class', request('gpuClass'));
            });

            $query->when(request('storageType') != null, function ($q) {
                return $q->where('storage_type', request('storageType'));
            });

            $alternativeScores = $query->get();

            if ($alternativeScores->count() == 0)
            {
                return view('frontend.partials.no-data')->with('recommendation', 'recommendation');
            }

        }
        else
        {
            $alternativeScores = AlternativeScore::all();
        
            if ($alternativeScores->count() == 0)
            {
                return view('frontend.partials.no-data')->with('recommendation', 'recommendation');
            }
        }
        // Step 1.
        /**
         * Get the information for each criterion score.
         * The information divided into: criterion score's actual score, criterion attribute, and criterion weight.
         * The information MUST be stored in order as score -> attribute -> weight.
         */
        $criterionScoresInformation = $this->getInformation($alternativeScores);
        // dd($criterionScoresInformation);

        // Step 2.
        // Get all criterion scores, then store them in an associative array with $scores as its variable.
        $scores = $this->getCriterionScores($criterionScoresInformation);
        
        // dd($scores);

        // Step 3.
        // Get the weight for each criterion score, then store them in an array with $weights as its variable.
        $weights = $this->getCriterionWeights($criterionScoresInformation);
        
        // dd($weights);

        // Step 4.
        // Normalize all criterion scores for each alternative score.
        $normalizedScores = $this->getNormalizedScores($criterionScoresInformation, $scores);
        
        // dd($normalizedScores);

        // Step 5.
        // Multiply each normalized criterion score with its weight.
        $finalizedScores = $this->getFinalizedScores($normalizedScores, $weights);
        
        // dd($finalizedScores);

        // Step 6.
        // Count each alternative final score by sum all of their normalized criterion score, then rank the alternatives.
        foreach ($finalizedScores as $index => $finalizedScore)
        {
            $alternativeRanks[$index] = (object) [
                // 'rank' => $index + 1,
                'alternative_name' => $finalizedScore['alternative_name'],
                'alternative_slug' => $finalizedScore['alternative_slug'],
                'final_score' => $this->getFinalScores($finalizedScore)
            ];
        }

        // Sorting method 1 (pure PHP).
        // Make an array column for 'final_score' from $alternativeRanks array.
        // $finalScore = array_column($alternativeRanks, 'final_score');

        // Sort the alternatives.
        // array_multisort($finalScore, SORT_DESC, $alternativeRanks);

        // Sorting method 2 (using Laravel's collection method).
        $collection = collect($alternativeRanks);

        $sorted = $collection->sortByDesc('final_score');
        
        $alternativeRanks = $sorted->values()->all();

        $number = 1;

        return view('frontend.partials.recommendation-list', compact('alternativeRanks', 'number'));
    }

    // Parameter: alternativeScores = all alternative score data.
    public function getInformation($alternativeScores)
    {
        foreach ($alternativeScores as $index => $alternativeScore)
        {
            $criterionScoresInformation[$index] = [
                'alternative_name'          => $alternativeScore->alternative->name,
                'alternative_slug'          => $alternativeScore->alternative->slug,
                'processor_manufacturer'    => $alternativeScore->processorManufacturerScore->score . '|' . $alternativeScore->processorManufacturerScore->criterion_attribute . '|' . $alternativeScore->processorManufacturerScore->criterion_weight,
                'processor_class'           => $alternativeScore->processorClassScore->score . '|' . $alternativeScore->processorClassScore->criterion_attribute . '|' . $alternativeScore->processorClassScore->criterion_weight,
                'processor_base_speed'      => $alternativeScore->processorBaseSpeedScore->score . '|' . $alternativeScore->processorBaseSpeedScore->criterion_attribute . '|' . $alternativeScore->processorBaseSpeedScore->criterion_weight,
                'processor_core'            => $alternativeScore->processorcoreScore->score . '|' . $alternativeScore->processorcoreScore->criterion_attribute . '|' . $alternativeScore->processorcoreScore->criterion_weight,
                'gpu_manufacturer'          => $alternativeScore->gpuManufacturerScore->score . '|' . $alternativeScore->gpuManufacturerScore->criterion_attribute . '|' . $alternativeScore->gpuManufacturerScore->criterion_weight,
                'gpu_class'                 => $alternativeScore->gpuClassScore->score . '|' . $alternativeScore->gpuClassScore->criterion_attribute . '|' . $alternativeScore->gpuClassScore->criterion_weight,
                'gpu_memory'                => $alternativeScore->gpuMemoryScore->score . '|' . $alternativeScore->gpuMemoryScore->criterion_attribute . '|' . $alternativeScore->gpuMemoryScore->criterion_weight,
                'ram'                       => $alternativeScore->ramScore->score . '|' . $alternativeScore->ramScore->criterion_attribute . '|' . $alternativeScore->ramScore->criterion_weight,
                'storage_type'              => $alternativeScore->storageTypeScore->score . '|' . $alternativeScore->storageTypeScore->criterion_attribute . '|' . $alternativeScore->storageTypeScore->criterion_weight,
                'storage_size'              => $alternativeScore->storageSizeScore->score . '|' . $alternativeScore->storageSizeScore->criterion_attribute . '|' . $alternativeScore->storageSizeScore->criterion_weight,
                'price'                     => $alternativeScore->priceScore->score . '|' . $alternativeScore->priceScore->criterion_attribute . '|' . $alternativeScore->priceScore->criterion_weight,
                'display_size'              => $alternativeScore->displaySizeScore->score . '|' . $alternativeScore->displaySizeScore->criterion_attribute . '|' . $alternativeScore->displaySizeScore->criterion_weight,
                'display_resolution'        => $alternativeScore->displayResolutionScore->score . '|' . $alternativeScore->displayResolutionScore->criterion_attribute . '|' . $alternativeScore->displayResolutionScore->criterion_weight,
                'display_refresh_rate'      => $alternativeScore->displayRefreshRateScore->score . '|' . $alternativeScore->displayRefreshRateScore->criterion_attribute . '|' . $alternativeScore->displayRefreshRateScore->criterion_weight,
                'brand'                     => $alternativeScore->brandScore->score . '|' . $alternativeScore->brandScore->criterion_attribute . '|' . $alternativeScore->brandScore->criterion_weight,
                'unit_weight'               => $alternativeScore->unitWeightScore->score . '|' . $alternativeScore->unitWeightScore->criterion_attribute . '|' . $alternativeScore->unitWeightScore->criterion_weight,
                'design'                    => $alternativeScore->designScore->score . '|' . $alternativeScore->designScore->criterion_attribute . '|' . $alternativeScore->designScore->criterion_weight,
                'feature'                   => $alternativeScore->featureScore->score . '|' . $alternativeScore->featureScore->criterion_attribute . '|' . $alternativeScore->featureScore->criterion_weight,
                'backlit_keyboard'          => $alternativeScore->backlitKeyboardScore->score . '|' . $alternativeScore->backlitKeyboardScore->criterion_attribute . '|' . $alternativeScore->backlitKeyboardScore->criterion_weight
            ];
        }
        
        return $criterionScoresInformation;
    }

    /**
     * Parameters: 
     * 1.   $data = an array whose informations will be extracted.
     * 2.   $param = a key to specify which information will be extracted form $data.
     *      $param can be either 'score' , 'attribute', or 'weight'.
     */
    public function extractInformation($data, $param)
    {
        $information = explode('|', $data);

        if ($param == 'score')
        {
            $score = intval($information[0]);

            return $score;
        }
        elseif ($param == 'attribute')
        {
            $attribute = intval($information[1]);

            return $attribute;
        }
        elseif ($param == 'weight')
        {
            $weignt = floatval($information[2]);

            return $weignt;
        }
    }

    public function getCriterionScores($criterionScoresInformation)
    {
        foreach ($criterionScoresInformation as $index => $criterionScoreInformation)
        {
            $scores['processorManufacturers'][$index]   = $this->extractInformation($criterionScoreInformation['processor_manufacturer'], 'score');
            $scores['processorClasses'][$index]         = $this->extractInformation($criterionScoreInformation['processor_class'], 'score');
            $scores['processorBaseSpeeds'][$index]      = $this->extractInformation($criterionScoreInformation['processor_base_speed'], 'score');
            $scores['processorCores'][$index]           = $this->extractInformation($criterionScoreInformation['processor_core'], 'score');
            $scores['gpuManufacturers'][$index]         = $this->extractInformation($criterionScoreInformation['gpu_manufacturer'], 'score');
            $scores['gpuClasses'][$index]               = $this->extractInformation($criterionScoreInformation['gpu_class'], 'score');
            $scores['gpuMemories'][$index]              = $this->extractInformation($criterionScoreInformation['gpu_memory'], 'score');
            $scores['rams'][$index]                     = $this->extractInformation($criterionScoreInformation['ram'], 'score');
            $scores['storageTypes'][$index]             = $this->extractInformation($criterionScoreInformation['storage_type'], 'score');
            $scores['storageSizes'][$index]             = $this->extractInformation($criterionScoreInformation['storage_size'], 'score');
            $scores['prices'][$index]                   = $this->extractInformation($criterionScoreInformation['price'], 'score');
            $scores['displaySizes'][$index]             = $this->extractInformation($criterionScoreInformation['display_size'], 'score');
            $scores['displayResolutions'][$index]       = $this->extractInformation($criterionScoreInformation['display_resolution'], 'score');
            $scores['displayRefreshRates'][$index]      = $this->extractInformation($criterionScoreInformation['display_refresh_rate'], 'score');
            $scores['brands'][$index]                   = $this->extractInformation($criterionScoreInformation['brand'], 'score');
            $scores['unitWeights'][$index]              = $this->extractInformation($criterionScoreInformation['unit_weight'], 'score');
            $scores['designs'][$index]                  = $this->extractInformation($criterionScoreInformation['design'], 'score');
            $scores['features'][$index]                 = $this->extractInformation($criterionScoreInformation['feature'], 'score');
            $scores['backlitKeyboards'][$index]         = $this->extractInformation($criterionScoreInformation['backlit_keyboard'], 'score');
        }

        return $scores;
    }

    public function getCriterionWeights($criterionScoresInformation)
    {
        foreach ($criterionScoresInformation as $criterionScoreInformation)
        {
            $weights['processorManufacturer']   = $this->extractInformation($criterionScoreInformation['processor_manufacturer'], 'weight');
            $weights['processorClass']          = $this->extractInformation($criterionScoreInformation['processor_class'], 'weight');
            $weights['processorBaseSpeed']      = $this->extractInformation($criterionScoreInformation['processor_base_speed'], 'weight');
            $weights['processorCore']           = $this->extractInformation($criterionScoreInformation['processor_core'], 'weight');
            $weights['gpuManufacturer']         = $this->extractInformation($criterionScoreInformation['gpu_manufacturer'], 'weight');
            $weights['gpuClass']                = $this->extractInformation($criterionScoreInformation['gpu_class'], 'weight');
            $weights['gpuMemory']               = $this->extractInformation($criterionScoreInformation['gpu_memory'], 'weight');
            $weights['ram']                     = $this->extractInformation($criterionScoreInformation['ram'], 'weight');
            $weights['storageType']             = $this->extractInformation($criterionScoreInformation['storage_type'], 'weight');
            $weights['storageSize']             = $this->extractInformation($criterionScoreInformation['storage_size'], 'weight');
            $weights['price']                   = $this->extractInformation($criterionScoreInformation['price'], 'weight');
            $weights['displaySize']             = $this->extractInformation($criterionScoreInformation['display_size'], 'weight');
            $weights['displayResolution']       = $this->extractInformation($criterionScoreInformation['display_resolution'], 'weight');
            $weights['displayRefreshRate']      = $this->extractInformation($criterionScoreInformation['display_refresh_rate'], 'weight');
            $weights['brand']                   = $this->extractInformation($criterionScoreInformation['brand'], 'weight');
            $weights['unitWeight']              = $this->extractInformation($criterionScoreInformation['unit_weight'], 'weight');
            $weights['design']                  = $this->extractInformation($criterionScoreInformation['design'], 'weight');
            $weights['feature']                 = $this->extractInformation($criterionScoreInformation['feature'], 'weight');
            $weights['backlitKeyboard']         = $this->extractInformation($criterionScoreInformation['backlit_keyboard'], 'weight');
        }

        return $weights;
    }

    public function getNormalizedScores($criterionScoresInformation, $scores)
    {
        
        foreach ($criterionScoresInformation as $index => $criterionScoreInformation)
        {
            $normalizedScores[$index] = [
                'alternative_name'          => $criterionScoreInformation['alternative_name'],
                'alternative_slug'          => $criterionScoreInformation['alternative_slug'],
                'processor_manufacturer_n'  => $this->normalize($criterionScoreInformation['processor_manufacturer'], $scores['processorManufacturers']),
                'processor_class_n'         => $this->normalize($criterionScoreInformation['processor_class'], $scores['processorClasses']),
                'processor_base_speed_n'    => $this->normalize($criterionScoreInformation['processor_base_speed'], $scores['processorBaseSpeeds']),
                'processor_core_n'          => $this->normalize($criterionScoreInformation['processor_core'], $scores['processorCores']),
                'gpu_manufacturer_n'        => $this->normalize($criterionScoreInformation['gpu_manufacturer'], $scores['gpuManufacturers']),
                'gpu_class_n'               => $this->normalize($criterionScoreInformation['gpu_class'], $scores['gpuClasses']),
                'gpu_memory_n'              => $this->normalize($criterionScoreInformation['gpu_memory'], $scores['gpuMemories']),
                'ram_n'                     => $this->normalize($criterionScoreInformation['ram'], $scores['rams']),
                'storage_type_n'            => $this->normalize($criterionScoreInformation['storage_type'], $scores['storageTypes']),
                'storage_size_n'            => $this->normalize($criterionScoreInformation['storage_size'], $scores['storageSizes']),
                'price_n'                   => $this->normalize($criterionScoreInformation['price'], $scores['prices']),
                'display_size_n'            => $this->normalize($criterionScoreInformation['display_size'], $scores['displaySizes']),
                'display_resolution_n'      => $this->normalize($criterionScoreInformation['display_resolution'], $scores['displayResolutions']),
                'display_refresh_rate_n'    => $this->normalize($criterionScoreInformation['display_refresh_rate'], $scores['displayRefreshRates']),
                'brand_n'                   => $this->normalize($criterionScoreInformation['brand'], $scores['brands']),
                'unit_weight_n'             => $this->normalize($criterionScoreInformation['unit_weight'], $scores['unitWeights']),
                'design_n'                  => $this->normalize($criterionScoreInformation['design'], $scores['designs']),
                'feature_n'                 => $this->normalize($criterionScoreInformation['feature'], $scores['features']),
                'backlit_keyboard_n'        => $this->normalize($criterionScoreInformation['backlit_keyboard'], $scores['backlitKeyboards'])
            ];
        }

        return $normalizedScores;
    }

    /**
     * Parameters:
     * 1.   $criterionScoreInformation = a specific criterion score information from one alternative score.
     * 2.   $criterionScores = an array that contains scores for a specific criterion from Step 2.
     */
    public function normalize($criterionScoreInformation, $criterionScores)
    {
        // The score for a specific criterion from one alternative score.
        $score = $this->extractInformation($criterionScoreInformation, 'score');
        
        // The attribute for a specific criterion from one alternative score.
        $attribute = $this->extractInformation($criterionScoreInformation, 'attribute');

        // 0 = cost, 1 = benefit
        if ($attribute == 0)
        {
            $normalizedScore = min($criterionScores) / $score;

            $normalizedScore = floatval(number_format($normalizedScore, 3));

            return $normalizedScore;
        }
        elseif ($attribute == 1)
        {
            $normalizedScore = $score / max($criterionScores);

            $normalizedScore = floatval(number_format($normalizedScore, 3));

            return $normalizedScore;
        }
    }

    public function getFinalizedScores($normalizedScores, $weights)
    {
        foreach ($normalizedScores as $index => $normalizedScore)
        {
            $finalizedScores[$index] = [
                'alternative_name'          => $normalizedScore['alternative_name'],
                'alternative_slug'          => $normalizedScore['alternative_slug'],
                'processor_manufacturer_f'  => $this->finalize($normalizedScore['processor_manufacturer_n'], $weights['processorManufacturer']),
                'processor_class_f'         => $this->finalize($normalizedScore['processor_class_n'], $weights['processorClass']),
                'processor_base_speed_f'    => $this->finalize($normalizedScore['processor_base_speed_n'], $weights['processorBaseSpeed']),
                'processor_core_f'          => $this->finalize($normalizedScore['processor_core_n'], $weights['processorCore']),
                'gpu_manufacturer_f'        => $this->finalize($normalizedScore['gpu_manufacturer_n'], $weights['gpuManufacturer']),
                'gpu_class_f'               => $this->finalize($normalizedScore['gpu_class_n'], $weights['gpuClass']),
                'gpu_memory_f'              => $this->finalize($normalizedScore['gpu_memory_n'], $weights['gpuMemory']),
                'ram_f'                     => $this->finalize($normalizedScore['ram_n'], $weights['ram']),
                'storage_type_f'            => $this->finalize($normalizedScore['storage_type_n'], $weights['storageType']),
                'storage_size_f'            => $this->finalize($normalizedScore['storage_size_n'], $weights['storageSize']),
                'price_f'                   => $this->finalize($normalizedScore['price_n'], $weights['price']),
                'display_size_f'            => $this->finalize($normalizedScore['display_size_n'], $weights['displaySize']),
                'display_resolution_f'      => $this->finalize($normalizedScore['display_resolution_n'], $weights['displayResolution']),
                'display_refresh_rate_f'    => $this->finalize($normalizedScore['display_refresh_rate_n'], $weights['displayRefreshRate']),
                'brand_f'                   => $this->finalize($normalizedScore['brand_n'], $weights['brand']),
                'unit_weight_f'             => $this->finalize($normalizedScore['unit_weight_n'], $weights['unitWeight']),
                'design_f'                  => $this->finalize($normalizedScore['design_n'], $weights['design']),
                'feature_f'                 => $this->finalize($normalizedScore['feature_n'], $weights['feature']),
                'backlit_keyboard_f'        => $this->finalize($normalizedScore['backlit_keyboard_n'], $weights['backlitKeyboard'])
            ];
        }

        return $finalizedScores;
    }

    /**
     * Parameters:
     * 1.   $normalizedCriterionScore = each normalized criterion score from one alternative score.
     * 2.   $weight = the weight of a specific criterion from Step 3.
     */
    public function finalize($normalizedCriterionScore, $weight)
    {
        $finalizedScore = $normalizedCriterionScore * $weight;

        $finalizedScore = floatval(number_format($finalizedScore, 3)) * 100;

        return $finalizedScore;
    }

    // Parameter: $finalizedScore = an array that contains the finalized (normalized and multiplied by the weight) scores from one alternative score.
    public function getFinalScores($finalizedScore)
    {
        // remove the 'alternative' attribute from $finalizedScore.
        // unset($finalizedScore['alternative']);
        $remove = ['alternative_name', 'alternative_slug'];

        $finalizedScore = array_diff_key($finalizedScore, array_flip($remove));

        $finalScore = array_sum(array_values($finalizedScore));

        return $finalScore;
    }
}
