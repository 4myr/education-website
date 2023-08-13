<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'lecture_id',
        'time',
        'title',
        'score',
        'start_at'
    ];

    protected $casts = [
        'start_at' => 'datetime'
    ];

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }

    public function lecture_student()
    {
        return $this->belongsTo(LectureStudent::class, 'lecture_id', 'lecture_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
