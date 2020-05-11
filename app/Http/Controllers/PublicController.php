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
            // A key to tell which page is making the request.
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
        // Items to compare
        $firstItem = "";
        $secondItem = "";
        $thirdItem = "";
        $fourthItem = "";

        // From the compare page.
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
            
            $firstItem = Alternative::inRandomOrder()->first();

            return view('frontend.compare', compact('firstItem', 'secondItem', 'thirdItem', 'fourthItem'));
        }

    }

    public function compareSearch(Request $request)
    {
        if ($request->keyword != null)
        {
            // A key to tell which page is making the request.
            $page = 'compare';
            
            $results = Alternative::where('name', 'LIKE', '%'.$request->keyword.'%')->limit(3)->get();

            return view('frontend.partials.search-results', compact('results',  'page'));
        }
    }

    // Used on the recommendation page.
    public function itemToCompareDetails($itemId)
    {
        $item = Alternative::find($itemId)->only(['id', 'name', 'image']);

        return $item;
    }

    public function compareRecommendation(Request $request)
    {
        // Items to compare
        $firstItem = "";
        $secondItem = "";
        $thirdItem = "";
        $fourthItem = "";
        
        $noResult = false;
        
        $itemIds = $this->validateItemIds($request->items);
        
        $itemsToCompare = array_values($itemIds);

        $itemsCount = count($itemsToCompare);

        if ($itemsCount == 1)
        {
            $firstItem = Alternative::find($itemsToCompare[0]);

            if ($firstItem == null) { $noResult = true; }
        }
        else if ($itemsCount == 2)
        {
            $firstItem = Alternative::find($itemsToCompare[0]);
            $secondItem = Alternative::find($itemsToCompare[1]);

            if ($firstItem == null || $secondItem == null) { $noResult = true; }
        }
        else if ($itemsCount == 3)
        {
            $firstItem = Alternative::find($itemsToCompare[0]);
            $secondItem = Alternative::find($itemsToCompare[1]);
            $thirdItem = Alternative::find($itemsToCompare[2]);

            if ($firstItem == null || $secondItem == null || $thirdItem == null) { $noResult = true; }
        }
        else if ($itemsCount == 4)
        {
            $firstItem = Alternative::find($itemsToCompare[0]);
            $secondItem = Alternative::find($itemsToCompare[1]);
            $thirdItem = Alternative::find($itemsToCompare[2]);
            $fourthItem = Alternative::find($itemsToCompare[3]);

            if ($firstItem == null || $secondItem == null || $thirdItem == null || $fourthItem == null) { $noResult = true; }
        }

        if ($noResult == true)
        {
            return view('frontend.compare-recommendation', compact('noResult'));
        }

        return view('frontend.compare-recommendation', compact('firstItem', 'secondItem', 'thirdItem', 'fourthItem'));
    }

    // To validate the item ids in the request from recommendation page ().
    /**
     * To validate the item ids in the request from recommendation page
     * (compare the recommendation results).
     */
    public function validateItemIds($items)
    {
        $itemIds = explode(',', $items);

        $validIds = array_filter($itemIds, 'is_numeric');

        array_splice($validIds, 4);

        return $validIds;
    }

    public function about()
    {
        return view('frontend.about');
    }
}
