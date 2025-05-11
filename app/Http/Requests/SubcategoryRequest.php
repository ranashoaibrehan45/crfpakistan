<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'category_id' => ['required'],
            'name' => ['required', 'string', 'unique:subcategories'],
        ];

        if (request()->isMethod('put')) {
            $rules = [
                'name' => [
                    'required',
                    'string',
                    Rule::unique('subcategories')->ignore(request('subcategory')),
                ],
            ];
        }

        return $rules;
    }
}
