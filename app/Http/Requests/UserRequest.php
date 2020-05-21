<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        if ($this->isMethod('POST'))
        {
            return [
                'name'              =>  ['required', 'string', 'max:255'],
                'email'             =>  ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'password'          =>  ['required', 'string', 'min:8', 'confirmed'],
                'display_picture'   =>  ['image', 'mimes:jpeg,jpg,png']
            ];
        }

        if ($this->isMethod('PUT') || $this->isMethod('PATCH'))
        {
            $user = $this->user;
            
            return [
                'name'              =>  ['required', 'string', 'max:255'],
                'email'             =>  ['required', 'string', 'email', 'max:255',
                                         Rule::unique('users', 'email')->ignore($user->id)],
                'current_password'  =>  ['nullable', 'required_with:new_password', 'string'],
                'new_password'      =>  ['nullable', 'required_with:current_password', 'string', 'min:8', 'confirmed'],
                'display_picture'   =>  ['image', 'mimes:jpeg,jpg,png']
            ];
        }
    }
}
