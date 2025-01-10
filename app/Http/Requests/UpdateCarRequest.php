<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
                'type' => 'nullable|string|max:100',
                'model' => 'nullable|string|max:100',
                'price' => 'nullable|numeric',
                'year' => 'nullable|integer|min:1900|max:'.date('Y'),
                'color' => 'nullable|string|max:100',
                'horsepower' => 'nullable|integer|min:0'
        ];
    }
}