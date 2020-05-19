<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editProfile(User $user)
    {
        return view('admin.users.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect(route('admin.dashboard'));
    }
}
