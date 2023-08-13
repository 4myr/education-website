<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'lecture_student_id',
        'question_id',
        'answer',
        'score',
    ];
}