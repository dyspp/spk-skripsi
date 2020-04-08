<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class AlternativeRequest extends FormRequest
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
                'name'          =>  'required|string|unique:alternatives,name',
                'image'         =>  'required|image|mimes:jpeg,jpg,png',
                'brand'         =>  'required|string|max:10',
                'price'         =>  'required|numeric',
                'processor'     =>  'required|string|max:100',
                'gpu'           =>  'required|string|max:70',
                'ram'           =>  'required|numeric',
                'storage'       =>  'required|string|max:50',
                'display'       =>  'required|string|max:50',
                'unit_weight'   =>  'required|numeric',
                'connectivity'  =>  'required|string|max:30',
                'ports'         =>  'required|string',
                'features'      =>  'required|string',
                'link'          =>  'required|string'
            ];
        }
        elseif ($this->isMethod('PUT') || $this->isMethod('PATCH'))
        {
            return [
                'name'          =>  'required|string|unique:alternatives,name,' . $this->alternative->id,
                'image'         =>  'image|mimes:jpeg,jpg,png',
                'brand'         =>  'required|string|max:10',
                'price'         =>  'required|numeric',
                'processor'     =>  'required|string|max:100',
                'gpu'           =>  'required|string|max:70',
                'ram'           =>  'required|numeric',
                'storage'       =>  'required|string|max:30',
                'display'       =>  'required|string|max:50',
                'unit_weight'   =>  'required|numeric',
                'connectivity'  =>  'required|string|max:30',
                'ports'         =>  'required|string',
                'features'      =>  'required|string',
                'link'          =>  'required|string'
            ];
        }
    }
}
