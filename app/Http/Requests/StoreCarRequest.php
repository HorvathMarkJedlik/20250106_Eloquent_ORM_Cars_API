<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'type' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'price' => 'required|numeric',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
            'color' => 'nullable|string|max:100',
            'horsepower' => 'required|integer|min:0'
        ];
    }
}
