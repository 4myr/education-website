<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LectureStudent extends Model
{
    protected $table = 'lecture_students';

    protected $fillable = [
        'lecture_id',
        'student_id',
        'score',
    ];

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
