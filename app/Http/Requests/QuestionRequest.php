<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'exam_id' => ['required', 'integer'],
            'type' => ['required'],
            'question' => ['required'],
            'choice1' => ['nullable'],
            'choice2' => ['nullable'],
            'choice3' => ['nullable'],
            'choice4' => ['nullable'],
            'score' => ['required', 'integer'],
            'answer' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
