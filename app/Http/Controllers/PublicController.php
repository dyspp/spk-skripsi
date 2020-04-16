<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CriterionScore;

class PublicController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function catalog()
    {
        $alternatives = Alternative::paginate(3);
        $filters['brands'] = config('filters.brands');
        $filters['processors'] = config('filters.processors');
        $filters['gpus'] = config('filters.gpus');
        $filters['rams'] = config('filters.rams');
        $filters['storageTypes'] = config('filters.storage_types');

        return view('frontend.catalog', compact('alternatives'))->with($filters);
    }

    public function catalogItem($slug)
    {
        $item = Alternative::where('slug', $slug)->firstOrFail();

        return view("frontend.catalog-item", compact('item'));
    }

    public function catalogFilter(Request $request)
    {
        // dd($request->all());
        if ($request->ajax())
        {
            $query = Alternative::query();

            // dd($request->all());
            $query->filterBy(request('brand'), 'brand');
            $query->filterBy(request('ram'), 'ram');
            $query->filterBy(request('processor'), 'processor');
            $query->filterBy(request('gpu'), 'gpu');
            $query->filterBy(request('storage-type'), 'storage');
            $alternatives = $query->paginate(3);
            // dd($alternatives);
            
            if ($alternatives->count() == 0)
            {
                return view('frontend.partials.no-data')->with('catalog', 'catalog');
            }
            else
            {
                return view('frontend.partials.catalog-item-list', compact('alternatives'));
            }
        }
    }

    public function catalogSearch(Request $request)
    {
        if ($request->keyword != null)
        {

            $results = Alternative::where('name', 'LIKE', '%'.$request->keyword.'%')->get();

            return view('frontend.partials.search-results', compact('results'));
        }
        
    }

    public function recommendation()
    {
        $criterionScores['processorClasses'] = CriterionScore::processorClass();
        $criterionScores['rams'] = CriterionScore::ram();
        $criterionScores['gpuClasses'] = CriterionScore::gpuClass();
        $criterionScores['storageTypes'] = CriterionScore::storageType();
        $criterionScores['prices'] = CriterionScore::price();
        // dd($criterionScores);

        return view('frontend.recommendation')->with($criterionScores);
    }
}
