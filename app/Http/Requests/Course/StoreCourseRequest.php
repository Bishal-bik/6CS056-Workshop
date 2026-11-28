<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:courses,name',
            'description' => 'nullable|string',
            'duration' => 'required|string|max:255',
            'fee' => 'required|numeric|min:0',
            'difficulty' => 'required|string|max:255',
            'is_active' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
        ];
    }
}