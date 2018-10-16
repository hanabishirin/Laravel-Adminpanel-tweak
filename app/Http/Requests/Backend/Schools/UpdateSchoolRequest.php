<?php

namespace App\Http\Requests\Backend\Schools;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSchoolRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-school');
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
            'school_zone' => 'required',
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
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'type' => 'required',
            'is_public' => 'required',
            'school_zone' => 'required',
        ];
    }
}
