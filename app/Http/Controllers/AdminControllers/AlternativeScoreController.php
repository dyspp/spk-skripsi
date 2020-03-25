<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Criterion;
use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\CriterionScore;
use App\Models\AlternativeScore;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequests\AlternativeScoreRequest;

class AlternativeScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relationships = ['alternative', 'processorManufacturerScore', 'processorClassScore', 'processorBaseSpeedScore', 'gpuManufacturerScore', 'gpuClassScore', 'gpuMemoryScore', 'ramScore', 'storageTypeScore', 'storageSizeScore', 'priceScore', 'displaySizeScore', 'displayResolutionScore', 'displayRefreshRateScore', 'brandScore', 'unitWeightScore', 'designScore', 'featureScore', 'backlitKeyboardScore'];

        $alternativeScores = AlternativeScore::with($relationships)->paginate(10);
        // dd($alternativeScores);

        return view('admin.alternative-scores.index', compact('alternativeScores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alternatives = Alternative::all();

        $criterionScores = $this->getRelationship();

        // return $criterionScores['brands'];

        return view('admin.alternative-scores.create', compact('alternatives'))->with($criterionScores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlternativeScoreRequest $request)
    {
        AlternativeScore::create([
            'alternative_id'            =>  $request->alternative,
            'processor_manufacturer'    =>  $request->processor_manufacturer,
            'processor_class'           =>  $request->processor_class,
            'processor_base_speed'      =>  $request->processor_base_speed,
            'processor_core'            =>  $request->processor_core,
            'gpu_manufacturer'          =>  $request->gpu_manufacturer,
            'gpu_class'                 =>  $request->gpu_class,
            'gpu_memory'                =>  $request->gpu_memory,
            'ram'                       =>  $request->ram,
            'storage_type'              =>  $request->storage_type,
            'storage_size'              =>  $request->storage_size,
            'price'                     =>  $request->price,
            'display_size'              =>  $request->display_size,
            'display_resolution'        =>  $request->display_resolution,
            'display_refresh_rate'      =>  $request->display_refresh_rate,
            'brand'                     =>  $request->brand,
            'unit_weight'               =>  $request->unit_weight,
            'design'                    =>  $request->design,
            'feature'                   =>  $request->feature,
            'backlit_keyboard'          =>  $request->backlit_keyboard
        ]);

        session()->flash('created', 'Data created successfully!');

        return redirect(route('alternativescores.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alternativeScore = AlternativeScore::find($id);

        $alternative = Alternative::where('id', $alternativeScore->alternative_id)->first();

        $criterionScores = $this->getRelationship();

        return view('admin.alternative-scores.edit', compact('alternativeScore', 'alternative'))->with($criterionScores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alternativeScore = AlternativeScore::find($id);

        $alternativeScore->update([
            'alternative_id'            =>  $request->alternative,
            'processor_manufacturer'    =>  $request->processor_manufacturer,
            'processor_class'           =>  $request->processor_class,
            'processor_base_speed'      =>  $request->processor_base_speed,
            'processor_core'            =>  $request->processor_core,
            'gpu_manufacturer'          =>  $request->gpu_manufacturer,
            'gpu_class'                 =>  $request->gpu_class,
            'gpu_memory'                =>  $request->gpu_memory,
            'ram'                       =>  $request->ram,
            'storage_type'              =>  $request->storage_type,
            'storage_size'              =>  $request->storage_size,
            'price'                     =>  $request->price,
            'display_size'              =>  $request->display_size,
            'display_resolution'        =>  $request->display_resolution,
            'display_refresh_rate'      =>  $request->display_refresh_rate,
            'brand'                     =>  $request->brand,
            'unit_weight'               =>  $request->unit_weight,
            'design'                    =>  $request->design,
            'feature'                   =>  $request->feature,
            'backlit_keyboard'          =>  $request->backlit_keyboard
        ]);

        session()->flash('updated', 'Data updated successfully!');

        return redirect(route('alternativescores.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getRelationship()
    {
        $relationships['processorManufacturers'] = CriterionScore::processorManufacturer();
        $relationships['processorClasses'] = CriterionScore::processorClass();
        $relationships['processorBaseSpeeds'] = CriterionScore::processorBaseSpeed();
        $relationships['processorCores'] = CriterionScore::processorCore();
        $relationships['gpuManufacturers'] = CriterionScore::gpuManufacturer();
        $relationships['gpuClasses'] = CriterionScore::gpuClass();
        $relationships['gpuMemories'] = CriterionScore::gpuMemory();
        $relationships['rams'] = CriterionScore::ram();
        $relationships['storageTypes'] = CriterionScore::storageType();
        $relationships['storageSizes'] = CriterionScore::storageSize();
        $relationships['prices'] = CriterionScore::price();
        $relationships['displaySizes'] = CriterionScore::displaySize();
        $relationships['displayResolutions'] = CriterionScore::displayResolution();
        $relationships['displayRefreshRates'] = CriterionScore::displayRefreshRate();
        $relationships['brands'] = CriterionScore::brand();
        $relationships['unitWeights'] = CriterionScore::unitWeight();
        $relationships['designs'] = CriterionScore::design();
        $relationships['features'] = CriterionScore::feature();
        $relationships['backlitKeyboards'] = CriterionScore::backlitKeyboard();

        return $relationships;
    }
}
