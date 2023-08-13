<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'year' => ['required', 'integer'],
            'month' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
