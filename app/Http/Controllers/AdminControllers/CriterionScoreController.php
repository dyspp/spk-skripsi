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
        $cScores = CriterionScore::with('criterion')->paginate(10);

        return view('admin.criterion-scores.index', compact('cScores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rowNumber = 1;
        $criteria = Criterion::with('criterionScores')->get();
        // dd($criteria->first());
        return view('admin.criterion-scores.create', compact('criteria', 'rowNumber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CriterionScoreRequest $request)
    {
        // dd($request->all());
        $newData = $request->validated();

        CriterionScore::create([
            'criterion_id'  => $newData['criterion'],
            'description'   => $newData['description'],
            'score'         => $newData['score']
        ]);

        session()->flash('created', 'Data created successfully!');

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
        $cScore = CriterionScore::find($id);

        $criteria = Criterion::all();

        $num = 1;

        $totalScores = CriterionScore::total($cScore);

        // return $cScores;
        return view('admin.criterion-scores.edit', compact('cScore', 'criteria', 'totalScores', 'num'));
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

        session()->flash('updated', 'Data updated successfully!');

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

        session()->flash('deleted', 'Data deleted successfully!');

        return redirect(route('criterionscores.index'));
    }
}
