<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],

        'name'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.',
            'alpha'     =>  'The :attribute must only contain letters.',
            'max'       =>  'The :attribute must be less than or equal to :max characters.',
            'unique'    =>  'The :attribute already exist.'
        ],
        'attribute' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'boolean'   =>  'The :attribute must only between Cost or Benefit.',
            'in'        =>  'The :attribute must only between Cost or Benefit.'
        ],
        'weight'    =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
            'between'   =>  'The :attribute values must between :min and :max'
        ],
        'criterion' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.'
        ],
        'description'   =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.'
        ],
        'score' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.'
        ] ,
        'image' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'image'     =>  'The :attribute must be in jpeg, jpg or png type.'
        ],
        'brand' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.',
            'max'       =>  'The :attribute must be less than or equal to :max characters.'
        ],
        'price' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.'
        ],
        'processor' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.',
            'max'       =>  'The :attribute must be less than or equal to :max characters.'
        ],
        'gpu' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.',
            'max'       =>  'The :attribute must be less than or equal to :max characters.'
        ],
        'ram'   =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.'
        ],
        'storage' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.',
            'max'       =>  'The :attribute must be less than or equal to :max characters.'
        ],
        'display' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.',
            'max'       =>  'The :attribute must be less than or equal to :max characters.'
        ],
        'unit_weight'   =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.'
        ],
        'connectivity'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.'
        ],
        'ports' =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.'
        ],
        'features'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.'
        ],
        'link'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'string'    =>  'The :attribute should be a text.',
            'max'       =>  'The :attribute must be less than or equal to :max characters.'
        ],
        'alternative'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
            'unique'    =>  'The :attribute already exist.'
        ],
        'processor_manufacturer'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'processor_class'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'processor_base_speed'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'processor_core'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'gpu_manufacturer'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'gpu_class'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'gpu_memory'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'storage_type'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'storage_size'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'display_size'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'display_resolution'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'display_refresh_rate'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'design'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'feature'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ],
        'backlit_keyboard'  =>  [
            'required'  =>  'The :attribute field shoud not be empty.',
            'numeric'   =>  'The :attribute must be in numeric values.',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name'                      =>  'Name',
        'attribute'                 =>  'Attribute',
        'weight'                    =>  'Weight',
        'criterion'                 =>  'Criterion',
        'description'               =>  'Description',
        'score'                     =>  'Score',
        'image'                     =>  'Image',
        'brand'                     =>  'Brand',
        'price'                     =>  'Price',
        'processor'                 => 'Processor',
        'gpu'                       =>  'GPU',
        'ram'                       =>  'RAM',
        'storage'                   =>  'Storage',
        'display'                   =>  'Display',
        'unit_weight'               =>  'Unit Weight',
        'connectivity'              =>  'Connectivity',
        'ports'                     =>  'Ports',
        'features'                  =>  'Features',
        'link'                      =>  'Official Website',
        'alternative'               =>  'Alternative',
        'processor_manufacturer'    =>  'Processor Manufacturer',
        'processor_class'           =>  'Processor Class',
        'processor_base_speed'      =>  'Processor Base Speed',
        'processor_core'            =>  'Processor Core',
        'gpu_manufacturer'          =>  'GPU Manufacturer',
        'gpu_class'                 =>  'GPU Class',
        'gpu_memory'                =>  'GPU Memory',
        'storage_type'              =>  'Storage Type',
        'storage_size'              =>  'Storage Size',
        'display_size'              =>  'Display Size',
        'display_resolution'        =>  'Display Resolution',
        'display_refresh_rate'      =>  'Display Refresh Rate',
        'design'                    =>  'Design',
        'feature'                   =>  'Feature',
        'backlit_keyboard'          =>  'Backlit Keyboard',
        'email'                     =>  'Email',
        'current_password'          =>  'Current Password',
        'new_password'              =>  'New Password',
        'display_picture'           =>  'Display Picture',
        'password'                  =>  'Password'
    ],

];
