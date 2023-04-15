<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialSectionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'tab_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'title_italic' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:30000',
            'visibility' => 'required|boolean',
        ];
    }
}
