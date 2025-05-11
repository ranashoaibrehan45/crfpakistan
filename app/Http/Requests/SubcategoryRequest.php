<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoryRequest extends FormRequest
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
        $rules = [
            'name' => ['required', 'string', 'unique:subcategories,name'],
        ];

        if (request()->isMethod('put')) {
            $rules = [
                'name' => ['required', 'string', 'unique:subcategories,name,'.request('subcategory').',id'],
            ];
        }

        return $rules;
    }
}
