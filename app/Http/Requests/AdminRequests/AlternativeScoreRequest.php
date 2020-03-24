<?php

namespace App\Http\Requests\AdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class AlternativeScoreRequest extends FormRequest
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
                'alternative'               =>  'required|numeric|unique:alternative_scores,alternative_id',
                'processor_manufacturer'    =>  'required|numeric',
                'processor_class'           =>  'required|numeric',
                'processor_base_speed'      =>  'required|numeric',
                'processor_core'            =>  'required|numeric',
                'gpu_manufacturer'          =>  'required|numeric',
                'gpu_class'                 =>  'required|numeric',
                'gpu_memory'                =>  'required|numeric',
                'ram'                       =>  'required|numeric',
                'storage_type'              =>  'required|numeric',
                'storage_size'              =>  'required|numeric',
                'price'                     =>  'required|numeric',
                'display_size'              =>  'required|numeric',
                'display_resolution'        =>  'required|numeric',
                'display_refresh_rate'      =>  'required|numeric',
                'brand'                     =>  'required|numeric',
                'unit_weight'               =>  'required|numeric',
                'design'                    =>  'required|numeric',
                'feature'                   =>  'required|numeric',
                'backlit_keyboard'          =>  'required|numeric'
            ];
        }
    }
}
