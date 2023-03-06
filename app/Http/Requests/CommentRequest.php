<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'rating' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'product' => ['required'],
            'name' => ['required', 'max:60'],
            'email' => ['required', 'max:60'],
            'comment' => ['required', 'max:9999'],
        ];
    }
}
