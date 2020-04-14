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
        $alternatives = Alternative::all();

        return view('frontend.catalog', compact('alternatives'));
    }

    public function catalogItem($slug)
    {
        $item = Alternative::where('slug', $slug)->firstOrFail();

        return view("frontend.catalog-item", compact('item'));
    }

    public function catalogFilter(Request $request)
    {
        // dd($request);
        if ($request->ajax())
        {
            $query = Alternative::query();

            $query->when(request('brand') != null, function($q) {
                global $brands;
                $brands = explode(',', request('brand'));
                
                $q->where(function($sub) {
                    global $brands;

                    for ($i = 0; $i < count($brands); $i++)
                    {
                        $sub->orWhere('brand', '=', $brands[$i]);
                    }
                    return $sub;
                });
                
                return $q;
            });

            $query->when(request('ram') != null, function($q) {
                global $rams;
                $rams = explode(',', request('ram'));
                
                $q->where(function($sub) {
                    global $rams;

                    for ($i = 0; $i < count($rams); $i++)
                    {
                        $sub->orWhere('ram', '=', $rams[$i]);
                    }
                    return $sub;
                });
                
                return $q;
            });

            $alternatives = $query->get();
            // dd($alternatives);
            return view('frontend.partials.catalog-item-list', compact('alternatives'));
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
