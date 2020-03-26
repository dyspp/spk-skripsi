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

        $criterionScores = $this->groupByCriteria();

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
        $newData = $request->validated();

        AlternativeScore::create($newData);

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

        $criterionScores = $this->groupByCriteria();

        return view('admin.alternative-scores.edit', compact('alternativeScore', 'alternative'))->with($criterionScores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlternativeScoreRequest $request, $id)
    {
        $alternativeScore = AlternativeScore::find($id);
        
        $updatedData = $request->validated();

        $updatedData['alternative_id'] = $alternativeScore->alternative_id;
        
        $alternativeScore->update($updatedData);

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
        $alternativeScore = AlternativeScore::find($id);

        $alternativeScore->delete();

        session()->flash('deleted', 'Data deleted successfully!');

        return redirect(route('alternativescores.index'));
    }

    // A function for grouping criterion scores based on their criteria (using query scopes).
    public function groupByCriteria()
    {
        $criteria['processorManufacturers'] = CriterionScore::processorManufacturer();
        $criteria['processorClasses'] = CriterionScore::processorClass();
        $criteria['processorBaseSpeeds'] = CriterionScore::processorBaseSpeed();
        $criteria['processorCores'] = CriterionScore::processorCore();
        $criteria['gpuManufacturers'] = CriterionScore::gpuManufacturer();
        $criteria['gpuClasses'] = CriterionScore::gpuClass();
        $criteria['gpuMemories'] = CriterionScore::gpuMemory();
        $criteria['rams'] = CriterionScore::ram();
        $criteria['storageTypes'] = CriterionScore::storageType();
        $criteria['storageSizes'] = CriterionScore::storageSize();
        $criteria['prices'] = CriterionScore::price();
        $criteria['displaySizes'] = CriterionScore::displaySize();
        $criteria['displayResolutions'] = CriterionScore::displayResolution();
        $criteria['displayRefreshRates'] = CriterionScore::displayRefreshRate();
        $criteria['brands'] = CriterionScore::brand();
        $criteria['unitWeights'] = CriterionScore::unitWeight();
        $criteria['designs'] = CriterionScore::design();
        $criteria['features'] = CriterionScore::feature();
        $criteria['backlitKeyboards'] = CriterionScore::backlitKeyboard();

        return $criteria;
    }
}
