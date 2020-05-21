<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manageAdmins()
    {
        $users = User::all();
        $number = 1;
        return view('admin.admins.manage', compact('users', 'number'));
    }
}
