<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function editProfile(User $user)
    {
        return view('admin.users.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request, User $user)
    {
        $updatedData = $request->only(['name', 'email']);

        if ($request->current_password != null)
        {
            if ($request->new_password != null)
            {
                $currentPassword = $request->current_password;
    
                $matchesPassword = Hash::check($currentPassword, $user->password);
    
                if ($matchesPassword == true)
                {
                    $newPassword = Hash::make($request->new_password);
    
                    $updatedData['password'] = $newPassword;
                }
                else
                {
                    session()->flash('password_not_match', 'the input doesn\'t match with your current password');
    
                    return redirect()->back();
                }
            }
            else
            {
                session()->flash('new_password_empty', 'if you want to change your password, please also provide the new password');

                return redirect()->back();
            }
        }
        
        if ($request->new_password != null && $request->current_password == null)
        {
            session()->flash('current_password_empty', 'if you want to change your password, please provide your current password');

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
