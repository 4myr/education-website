<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureStudentsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'lecture_id' => ['required', 'integer'],
            'student_id' => ['required', 'integer'],
            'score' => ['nullable', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
