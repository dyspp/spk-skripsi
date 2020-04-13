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
