<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer'],
            'question_id' => ['required', 'integer'],
            'answer' => ['required'],
            'score' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
