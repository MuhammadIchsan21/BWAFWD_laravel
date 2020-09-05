<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
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
        return [
            'title' => 'required|max255',
            'location' => 'required|max255',
            'about' => 'required',
            'featured_event' => 'required|max255',
            'language' => 'required|max255',
            'foods' => 'required|max255',
            'departure_date' => 'required|max255',
            'duration' => 'required|max255',
            'type' => 'required|max255',
            'price' => 'required|integer'
        ];
    }
}
