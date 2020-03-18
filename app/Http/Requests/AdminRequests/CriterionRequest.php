<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class CriterionRequest extends FormRequest
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
                'name'         =>  'required|string|max:30|unique:criteria,name',
                'attribute'    =>  'required|boolean|in:0,1',
                'weight'       =>  'required|numeric|between:0,0.99'
            ];
        }
        elseif ($this->isMethod('PUT') || $this->isMethod('PATCH'))
        {
            return [
                'name'         =>  'required|string|max:30|unique:criteria,name,' . $this->criterion->id,
                'attribute'    =>  'required|boolean|in:0,1',
                'weight'       =>  'required|numeric|between:0,0.99'
            ];
        }
    }
}
