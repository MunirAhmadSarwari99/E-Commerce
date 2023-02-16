<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => ['mimes:jpeg,jpg,png', 'required'],
            'productName' => ['string', 'required', 'max:255'],
            'CategoryName' => ['integer', 'required'],
            'childName' => ['integer', 'required'],
            'childTo' => ['integer', 'required'],
            'productModel' => ['string', 'required', 'max:100'],
            'price' => ['required', 'max:10'],
        ];
    }
}
