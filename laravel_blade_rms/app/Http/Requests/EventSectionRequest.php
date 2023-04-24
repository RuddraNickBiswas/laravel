<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventSectionRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0'],
            'description_top' => ['required', 'string'],
            'point_1' => ['required', 'string', 'max:255'],
            'point_2' => ['required', 'string', 'max:255'],
            'point_3' => ['required', 'string', 'max:255'],
            'description_bottom' => ['required', 'string'],
            'image' => 'nullable|image|max:30000',
            'visibility' => ['nullable', 'boolean'],
        ];
    }
}
