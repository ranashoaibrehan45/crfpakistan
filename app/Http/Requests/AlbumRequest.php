<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlbumRequest extends FormRequest
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
            'icon' => ['required', 'image'],
        ];

        if (request()->isMethod('put')) {
            $rules = [
                'icon' => ['nullable', 'image'],
                'name' => [
                    'required',
                    'string',
                    Rule::unique('albums')->ignore(request('album')),
                ],
            ];
        }

        return $rules;
    }
}
