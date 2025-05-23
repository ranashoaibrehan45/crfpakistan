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
            'subcategory_id' => ['required', 'unique:pages,subcategory_id'],
            'meta_tags' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'unique:pages,title'],
            'content' => ['required'],
        ];

        if ($this->filled('category_id')) {
            $category = \App\Models\Category::find($this->category_id);

            if ($category && ! $category->has_children) {
                $rules['subcategory_id'] = ['nullable'];

                if (! $category->multiple_pages) {
                    $rules['category_id'] = ['required', 'unique:pages,category_id'];
                }

                if ($this->isMethod('put')) {
                    $rules['category_id'] = [
                        'required',
                        Rule::unique('pages', 'category_id')->ignore($this->page->id ?? null),
                    ];
                }
            } else {
                $subcategory = \App\Models\Subcategory::find($this->subcategory_id);
                if ($subcategory) {
                    if ($subcategory->multiple_pages) {
                        $rules['subcategory_id'] = ['required'];
                    } elseif ($this->isMethod('put')) {
                        $rules['subcategory_id'] = [
                            'required',
                            Rule::unique('pages', 'subcategory_id')->ignore($this->page->id ?? null),
                        ];
                    }
                }
            }
        }

        if ($this->isMethod('put')) {
            $rules['title'] = [
                'required',
                'string',
                Rule::unique('pages', 'title')->ignore($this->page->id ?? null),
            ];
        }

        return $rules;
    }
}
