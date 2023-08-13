<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'exam_id',
        'type',
        'question',
        'choice1',
        'choice2',
        'choice3',
        'choice4',
        'score',
        'answer',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
