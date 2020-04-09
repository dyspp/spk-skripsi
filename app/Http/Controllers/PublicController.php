<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

    public function showItem($slug)
    {
        $item = Alternative::where('slug', $slug)->firstOrFail();

        return view("frontend.catalog-item", compact('item'));
    }
}
