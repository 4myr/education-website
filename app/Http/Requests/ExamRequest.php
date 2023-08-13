<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'lecture_id' => ['required', 'integer'],
            'time' => ['required', 'integer'],
            'title' => ['required'],
            'score' => ['nullable', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
