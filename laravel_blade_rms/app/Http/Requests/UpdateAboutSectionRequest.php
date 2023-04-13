<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutSectionRequest extends FormRequest
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
             'title' => ['required', 'string'],
            'title_bold' => ['required', 'string'],
            'description_top' => ['required', 'string'],
            'description_italic' => ['required', 'string'],
            'main_point_1' => ['required', 'string'],
            'main_point_2' => ['required', 'string'],
            'main_point_3' => ['required', 'string'],
            'description_bottom' => ['required', 'string'],
            'video_url' => ['required', 'url'],
            'image' => ['nullable', 'image'],
            'visibility' => ['boolean'],
        ];
    }
}
