<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'productName' => ['string', 'required', 'max:255'],
            'CategoryName' => [],
            'childName' => [],
            'tagName' => [],
            'details' => ['required', 'max:9999'],
            'price' => ['required', 'max:10'],
            'discount' => ['max:2'],
        ];
    }
}
