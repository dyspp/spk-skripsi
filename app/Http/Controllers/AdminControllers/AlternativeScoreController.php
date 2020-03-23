<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Criterion;
use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\CriterionScore;
use App\Models\AlternativeScore;
use App\Http\Controllers\Controller;

class AlternativeScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternativeScores = AlternativeScore::paginate(10);

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

        $criterionScores['processorManufacturers'] = CriterionScore::processorManufacturer();
        $criterionScores['processorClasses'] = CriterionScore::processorClass();
        $criterionScores['processorBaseSpeeds'] = CriterionScore::processorBaseSpeed();
        $criterionScores['processorCores'] = CriterionScore::processorCore();
        $criterionScores['gpuManufacturers'] = CriterionScore::gpuManufacturer();
        $criterionScores['gpuClasses'] = CriterionScore::gpuClass();
        $criterionScores['gpuMemories'] = CriterionScore::gpuMemory();
        $criterionScores['rams'] = CriterionScore::ram();
        $criterionScores['storageTypes'] = CriterionScore::storageType();
        $criterionScores['storageSizes'] = CriterionScore::storageSize();
        $criterionScores['prices'] = CriterionScore::price();
        $criterionScores['displaySizes'] = CriterionScore::displaySize();
        $criterionScores['displayResolutions'] = CriterionScore::displayResolution();
        $criterionScores['displayRefreshRates'] = CriterionScore::displayRefreshRate();
        $criterionScores['brands'] = CriterionScore::brand();
        $criterionScores['unitWeights'] = CriterionScore::unitWeight();
        $criterionScores['designs'] = CriterionScore::design();
        $criterionScores['features'] = CriterionScore::feature();
        $criterionScores['backlitKeyboards'] = CriterionScore::backlitKeyboard();

        // return $criterionScores['brands'];

        return view('admin.alternative-scores.create', compact('alternatives'))->with($criterionScores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
}
