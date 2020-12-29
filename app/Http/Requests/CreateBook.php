<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBook extends FormRequest
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
                   'name' => 'required|unique:books',
                   'category_id' => 'required',
                   'author_id' => 'required',
                   'image' => 'required',
                   'description' => 'required',
                   'isbn' => 'required|unique:books',
                   'price' => 'required',
                   'inStock' => 'required',
                   'sold' => 'required',
               ];
    }

    public function messages()
    {
        return [
            'name.required' => '*This field is required',
            'name.unique' => '*This book is already being added',
            'image.required' => '*This field is required',
            'description.unique' => '*This field is required',
            'isbn.required' => '*This field is required',
            'isbn.unique' => '*This isbn is already being used',
            'sold.required' => '*This field is required',
            'price.required' => '*This field is required',
            'inStock.required' => '*This field is required',

        ];
    }

}
