<?php

namespace App\Http\Requests\API;

use App\Models\steroid;
use InfyOm\Generator\Request\APIRequest;

class UpdatesteroidAPIRequest extends APIRequest
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
        $rules = steroid::$rules;
        
        return $rules;
    }
}
