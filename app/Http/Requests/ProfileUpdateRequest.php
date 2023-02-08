<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'max:60'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'gender' => ['required'],
            'phone' => ['string', 'required', 'max:11', Rule::unique(User::class)->ignore($this->user()->id)],
            'address' => ['string', 'required', 'max:100'],
            'image' => ['mimes:jpeg,jpg,png'],
        ];
    }
}
