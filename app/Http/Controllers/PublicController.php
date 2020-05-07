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
        if ($request->ajax())
        {
            $query = Alternative::query();

            $query->filterBy(request('brand'), 'brand');
            $query->filterBy(request('ram'), 'ram');
            $query->filterBy(request('processor'), 'processor');
            $query->filterBy(request('gpu'), 'gpu');
            $query->filterBy(request('storage-type'), 'storage');
            $alternatives = $query->paginate(3);
            
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
            $page = 'catalog';
            $results = Alternative::where('name', 'LIKE', '%'.$request->keyword.'%')->get();

            return view('frontend.partials.search-results', compact('results',  'page'));
        }
        
    }

    public function recommendation()
    {
        $criterionScores['processorClasses'] = CriterionScore::processorClass();
        $criterionScores['rams'] = CriterionScore::ram();
        $criterionScores['gpuClasses'] = CriterionScore::gpuClass();
        $criterionScores['storageTypes'] = CriterionScore::storageType();
        $criterionScores['prices'] = CriterionScore::price();

        return view('frontend.recommendation')->with($criterionScores);
    }

    public function compare(Request $request)
    {
        // dd($request->url());
        $firstItem = "";
        $secondItem = "";
        $thirdItem = "";
        $fourthItem = "";

        if ($request->ajax())
        {
            if ($request->firstItemId != null) { $firstItem = Alternative::find($request->firstItemId); }
            if ($request->secondItemId != null) { $secondItem = Alternative::find($request->secondItemId); }
            if ($request->thirdItemId != null) { $thirdItem = Alternative::find($request->thirdItemId); }
            if ($request->fourthItemId != null) { $fourthItem = Alternative::find($request->fourthItemId); }

            $comparedItems = view('frontend.partials.compared-items',
                                compact('firstItem', 'secondItem', 'thirdItem', 'fourthItem'))->render();
            $comparedItemsSpecs = view('frontend.partials.compared-items-specs',
                                    compact('firstItem', 'secondItem', 'thirdItem', 'fourthItem'))->render();

            return response()->json([
                'comparedItems' => $comparedItems,
                'comparedItemsSpecs'    => $comparedItemsSpecs
            ]);
        }
        else
        {
            if ($request->firstItemId || $request->secondItemId || $request->thirdItemId)
            {
                $firstItem = Alternative::find($request->firstItemId);
                $secondItem = Alternative::find($request->secondItemId);
                $thirdItem = Alternative::find($request->thirdItemId);
                $fourthItem = Alternative::find($request->fourthItemId);
            }
            else
            {
                $firstItem = Alternative::inRandomOrder()->first();
            }
            
            return view('frontend.compare', compact('firstItem', 'secondItem', 'thirdItem', 'fourthItem'));
        }

    }

    public function compareSearch(Request $request)
    {
        if ($request->keyword != null)
        {
            $page = 'compare';
            $results = Alternative::where('name', 'LIKE', '%'.$request->keyword.'%')->limit(3)->get();

            return view('frontend.partials.search-results', compact('results',  'page'));
        }
    }

    public function itemToCompareDetails($itemId)
    {
        $item = Alternative::find($itemId)->only(['id', 'name', 'image']);

        return $item;
    }

    public function about()
    {
        return view('frontend.about');
    }
}
