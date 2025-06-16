<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MorecategoryRequest extends FormRequest
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
        $subcategoryId = request('subcategory_id');

        $morecategoryId = request('morecategory');

        $rules = [
            'subcategory_id' => ['required'],
            'name' => [
                'required',
                'string',
                Rule::unique('morecategories')
                    ->where(fn ($query) => $query->where('subcategory_id', $subcategoryId)),
            ],
        ];

        if (request()->isMethod('put')) {
            $rules = [
                'name' => [
                    'required',
                    'string',
                    Rule::unique('morecategories')
                        ->where(fn ($query) => $query->where('subcategory_id', $subcategoryId))
                        ->ignore($morecategoryId),
                ],
            ];
        }

        return $rules;
    }
}
