<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'teacher_id',
        'lecture_group_id',
        'code',
        'is_active',
        'capacity',
        'term_id',
        'link',
        'holding_day',
        'holding_time',
    ];

    public function lectureGroup()
    {
        return $this->belongsTo(LectureGroup::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function sessions()
    {
        return $this->hasMany(LectureSession::class);
    }

    public function students()
    {
        return $this->hasMany(LectureStudent::class);
    }
}
