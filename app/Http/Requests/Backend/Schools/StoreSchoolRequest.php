<?php

namespace App\Http\Requests\Backend\Schools;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-school');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'type' => 'required',
            'is_public' => 'required',
        ];
    }

    /**
     * Show the Messages for rules above.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'required',
            'address.required' => 'required',
            'city.required' => 'required',
            'latitude.required' => 'required',
            'longitude.required' => 'required',
            'type.required' => 'required',
            'is_public.required' => 'required',
        ];
    }
}
