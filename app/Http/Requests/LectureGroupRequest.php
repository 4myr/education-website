<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureGroupRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'code' => ['required', 'integer'],
            'is_active' => ['required'],
            'field_id' => ['nullable', 'integer', 'exists:fields,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
