<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'name'             => 'required',
            'tiny_description' => 'required',
            'description'      => 'required',
            'image'            => 'image',
            'category_id'      => 'numeric',
            'banner'           => 'image',
            'location'         => 'required',
            'duration'         => 'required',
            'difficulty_level' => '',
            'sleeping_bag_rental' => '',
            'cost'             => 'required|numeric'
        ];
    }
}
