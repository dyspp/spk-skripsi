<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('check.privilege')->except(['editProfile', 'updateProfile']);
    }

    public function add()
    {
        return view('admin.admins.add');
    }

    public function store(UserRequest $request)
    {
        $newData = $request->validated();
        
        if ($request->hasFile('display_picture'))
        {
            $uploadedImage = $this->updloadImage($newData['display_picture']);
            
            $newData['display_picture'] = $uploadedImage;
        }
        else
        {
            $newData['display_picture'] = 'default.jpg';
        }
        
        $newData['password'] = Hash::make($newData['password']);

        User::create($newData);

        session()->flash('added', 'Admin added successfully!');

        return redirect(route('admin.manage-admins'));
    }

    public function editProfile(User $user)
    {
        return view('admin.admins.edit-profile', compact('user'));
    }

    public function updateProfile(UserRequest $request, User $user)
    {
        $updatedData = $request->validated();
        
        if ($updatedData['current_password'] != null)
        {
            if ($updatedData['new_password'] != null)
            {
                $currentPassword = $updatedData['current_password'];

                $matchesPassword = Hash::check($currentPassword, $user->password);
    
                if ($matchesPassword == true)
                {
                    $newPassword = Hash::make($updatedData['new_password']);
    
                    $updatedData['password'] = $newPassword;
                }
                else
                {
                    session()->flash('password_not_match', 'The input doesn\'t match with your current password.');
    
                    return redirect()->back();
                }
            }
            else
            {
                session()->flash('new_password_empty', 'If you want to change your password, please also provide the new password.');

                return redirect()->back();
            }
        }
        
        if ($updatedData['new_password'] != null && $updatedData['current_password'] == null)
        {
            session()->flash('current_password_empty', 'If you want to change your password, please provide your current password.');

            return redirect()->back();
        }

        if ($request->hasFile('display_picture'))
        {
            $uploadedImage = $this->updloadImage($request->display_picture);

            $this->deleteImage($user->display_picture);

            $updatedData['display_picture'] = $uploadedImage;
        }

        $user->update($updatedData);

        session()->flash('profile_updated', 'Profile updated!');

        return redirect()->back();
    }

    public function getImageDirectory()
    {
        return 'images\\users\\';
    }

    public function updloadImage($imageFile)
    {
        $image = $imageFile;

        $uploaded = date('dmY-His');

        $originalName = strtolower($imageFile->getClientOriginalName());

        $imageName = ''.$uploaded.'-'.$originalName;

        $imageDirectory = $this->getImageDirectory();

        $image->move($imageDirectory, $imageName);

        return $imageName;
    }

    public function deleteImage($imageFile)
    {
        if (File::exists(public_path($this->getImageDirectory().$imageFile)))
        {
            File::delete(public_path($this->getImageDirectory().$imageFile));
        }
    }
}