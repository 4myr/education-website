<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'teacher_id' => ['required', 'integer'],
            'lecture_group_id' => ['required', 'integer'],
            'code' => ['required', 'integer'],
            'is_active' => ['required'],
            'capacity' => ['required', 'integer'],
            'term_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
