<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Criterion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequests\CriterionRequest;

class CriterionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $keyword = $request->search;

            $criteria = Criterion::search($keyword);

            return view('admin.partials.data-tables.criteria-table', compact('criteria'));
        }

        $criteria = Criterion::paginate(25);

        return view('admin.criteria.index', compact('criteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criteria = Criterion::all();

        $num = 1;

        return view('admin.criteria.create', compact('criteria', 'num'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CriterionRequest $request)
    {
        Criterion::create($request->validated());

        session()->flash('created', config('messages.created'));

        return redirect(route('criteria.index'));
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
    public function edit(Criterion $criterion)
    {
        $criteria = Criterion::all();

        $num = 1;
        
        return view('admin.criteria.edit', compact('criterion', 'criteria', 'num'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CriterionRequest $request, Criterion $criterion)
    {
        $criterion->update($request->validated());

        session()->flash('updated', config('messages.updated'));

        return redirect(route('criteria.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criterion $criterion)
    {
        $criterion->delete();

        session()->flash('deleted', config('messages.deleted'));
        
        return redirect(route('criteria.index'));
    }

    public function generateCriteriaCode()
    {
        $criterion = Criterion::latest('code')->first();

        // If there is no Criteria Code found (no records exist in the database),
        // return C-001 as the first Criteria Code. 
        if ($criterion == null)
        {
            return 'C-001';
        }
        else
        {
            $lastCode       = $criterion->code;
            $lastCode       = explode('-', $lastCode);
            $prefix         = $lastCode[0];
            $code           = $lastCode[1];
            $newCode        = str_pad(intval($code) + 1, strlen($code), '0', STR_PAD_LEFT);
            $code           = $prefix .'-'. $newCode;
            
            return $code;
        }
    }

    public function validateCriteriaCode($request)
    {
        $generatedCode = $this->generateCriteriaCode();

        if ($request->code != $generatedCode)
        {
            return 'unauthorized modifed code.';
        }
        else
        {
            return $request->code;
        }
    }

    // A function to accept only the specific fields from a request.
    public function requestOnly($request)
    {
        $request->only(['name'], ['attribute'], ['weight']);

        return $request;
    }
}
