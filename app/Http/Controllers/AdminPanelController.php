<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Criterion;
use App\Models\Alternative;
use App\Models\CriterionScore;
use App\Models\AlternativeScore;

class AdminPanelController extends Controller
{
    public function dashboard()
    {
        $data['criteriaCount'] = Criterion::count();
        $data['criterionScoresCount'] = CriterionScore::count();
        $data['alternativesCount'] = Alternative::count();
        $data['alternativeScoresCount'] = AlternativeScore::count();
        $data['adminsCount'] = User::count();

        return view('admin.dashboard')->with($data);
    }

    public function manageAdmins(Request $request)
    {
        $number = 1;

        if ($request->ajax())
        {
            $keyword = $request->search;

            $users = User::search($keyword);
        
            return view('admin.partials.data-tables.admins-table', compact('users', 'number'));
        }

        $users = User::all();

        return view('admin.admins.manage', compact('users', 'number'));
    }
}
