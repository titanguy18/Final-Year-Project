<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'car' => 'bail|required|string|max:255',
            'description' => 'bail|required|string|max:255',
            'price' => 'bail|required|string|max:255',
            'quantity' => 'bail|required|string|max:255',
            'brand' => 'bail|required|string|max:255',
        ];
    }
}
