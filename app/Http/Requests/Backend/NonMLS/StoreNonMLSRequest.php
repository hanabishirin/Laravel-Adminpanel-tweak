<?php

namespace App\Http\Requests\Backend\NonMLS;

use Illuminate\Foundation\Http\FormRequest;

class StoreNonMLSRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-nonmls');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'area' => 'required',
//            'asking_price' => 'required',
//            'price_history' => 'required',
//            'address' => 'required',
//            'city' => 'required',
//            'state' => 'required',
//            'postal' => 'required',
//            'list_date' => 'required',
//            'latitude' => 'required',
//            'longitude' => 'required',
//            'price_sqft' => 'required|number',
//            'p_type' => 'required',
//            'p_layout' => 'required',
//            'brokerage' => 'required',
//            'school_listing' => 'required',
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
//            'answer.required'   => 'Answer field is required.',
//            'area.required' => 'required',
//            'asking_price.required' => 'required',
//            'price_history.required' => 'required',
//            'address.required' => 'required',
//            'city.required' => 'required',
//            'state.required' => 'required',
//            'postal.required' => 'required',
//            'list_date.required' => 'required',
//            'latitude.required' => 'required',
//            'longitude.required' => 'required',
//            'price_sqft.required' => 'required',
//            'price_sqft.number' => 'required',
//            'p_type.required' => 'required',
//            'p_layout.required' => 'required',
//            'brokerage.required' => 'required',
//            'school_listing.required' => 'required',
        ];
    }
}
