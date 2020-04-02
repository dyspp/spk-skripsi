<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Criterion;
use Illuminate\Http\Request;
use App\Models\CriterionScore;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequests\CriterionScoreRequest;

class CriterionScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criterionScores = CriterionScore::with('criterion')->paginate(10);

        return view('admin.criterion-scores.index', compact('criterionScores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $number = 1;

        $criteria = Criterion::with('criterionScores')->get();
        
        return view('admin.criterion-scores.create', compact('criteria', 'number'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CriterionScoreRequest $request)
    {
        $newData = $request->validated();

        CriterionScore::create([
            'criterion_id'  => $newData['criterion'],
            'description'   => $newData['description'],
            'score'         => $newData['score']
        ]);

        session()->flash('created', config('messages.created'));

        return redirect(route('criterionscores.index'));
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
        $criterionScore = CriterionScore::find($id);

        $criteria = Criterion::all();

        $number = 1;

        // Get all Criterion Scores from a specific Criterion.
        $allScores = CriterionScore::fromCriterion($criterionScore);

        return view('admin.criterion-scores.edit', compact('criterionScore', 'criteria', 'allScores', 'number'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CriterionScoreRequest $request, $id)
    {
        $updatedData = $request->validated();
        
        $cScore = CriterionScore::find($id);

        $cScore->update([
            'criterion_id'  => $updatedData['criterion'],
            'description'   => $updatedData['description'],
            'score'         => $updatedData['score']
        ]);

        session()->flash('updated', config('messages.updated'));

        return redirect(route('criterionscores.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cScore = CriterionScore::find($id);

        $cScore->delete();

        session()->flash('deleted', config('messages.deleted'));

        return redirect(route('criterionscores.index'));
    }

    // A function to get all scores for the specific criterion.
    public function getAllScoresFor($criterionId)
    {
        $criterion = Criterion::find($criterionId);

        $scores = CriterionScore::where('criterion_id', $criterionId)->get();

        $number = 1;

        if ($criterion === null || $scores === null)
        {
            return view('admin.partials.no-data-modal');
        }
        else
        {
            return view('admin.partials.criterion-scores-list', compact('criterion', 'scores', 'number'));
        }
    }
}
