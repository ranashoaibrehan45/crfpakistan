<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'unique:categories,name'],
            'has_children' => ['nullable'],
            'type' => ['required', 'in:header,footer'],
        ];

        if (request()->isMethod('put')) {
            $rules = [
                'name' => ['required', 'string', 'unique:categories,name,'.request('category').',id'],
            ];
        }

        return $rules;
    }
}
