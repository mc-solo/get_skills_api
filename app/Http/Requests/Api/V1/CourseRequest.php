<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // after installing sa
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail' => 'nullable|string',
            'price'=> 'required|numeric|min:0',
            'level' => 'required|in:beginner,intermediate,advanced',
            'tags' => 'nullable|array',
            'video_url' => 'nullable|string',
            'requirements' => 'nullable|string',
        ];
    }
}
