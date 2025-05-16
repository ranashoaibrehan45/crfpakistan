<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'subcategory_id' => ['required', 'unique:pages'],
            'meta_tags' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'unique:pages'],
            'content' => ['required'],
        ];

        if (request()->isMethod('put')) {
            $rules['subcategory_id'] = ['required', 'unique:pages,subcategory_id,'.request('page')->id.',id'];
            $rules['title'] = ['required', 'string', 'unique:pages,title,'.request('page')->id.',id'];
        }

        return $rules;
    }
}
