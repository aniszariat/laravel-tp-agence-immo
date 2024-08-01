<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertContactRequest extends FormRequest
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
            'firstname' => ['required', 'string', 'min:3'],
            'lastname' => ['required', 'string', 'min:3'],
            'phone' => ['string', 'min:4'],
            'mail' => ['required', 'email', 'min:4'],
            'message' => ['required', 'string', 'min:4'],
        ];
    }
}
