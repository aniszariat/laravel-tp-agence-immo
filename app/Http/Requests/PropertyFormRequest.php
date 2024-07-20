<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:8'],
            'description' => ['required', 'min:20'],
            'surafce' => ['required', 'intger', 'min:10',],
            'rooms' => ['required', 'intger', 'min:1',],
            'bedrooms' => ['required', 'intger', 'min:0',],
            'floor' => ['required', 'intger', 'min:0',],
            'price' => ['required', 'intger', 'min:0',],
            'city' => ['required', 'min:8',],
            'address' => ['required', 'min:8',],
            'postal_code' => ['required', 'min:8',],
            'sold' => ['required', 'bool',],
        ];
    }
}
